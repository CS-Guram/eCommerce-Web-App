<?php
 include('server.php');

 error_reporting(0);
 
 session_start();

 if (isset($_SESSION['username'])){
  header("Location:login.php");
}

 if(isset($_POST['create'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if($password = $cpassword) {
       $sql = "SELECT * FROM user1 WHERE email = '$email'";
       $result = mysqli_query($conn, $sql);
       if(!$result->num_rows > 0){
       $sql = "INSERT INTO user1 (username, email, password)
	  		  values ('$username','$email', '$password')";

	$result = mysqli_query($conn, $sql);
	if ($result) {
 		echo "<script>alert('Wow! User Registration Copleted.')</script>";
    	$username = "";
     	$email = "";
     	$_POST['password'] = "";
    	 $_POST['cpassword'] = "";
	} else { 
     echo "<script>alert('Wooops! Something Wrong Went.')</script>";
    }
  } else {
      echo "<script>alert('Wooops! Email Already Exists.')</script>";
    }
  } else {
 		echo "<script>alert('password not matched.')</script>";
         }
     }
?>


<!DOCTYPE html>
<html>
<head>
  <title>User Registration</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="regstyle.css">
	
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<!--Header -->
<div class="header">
	<div class="inner_header">
	 <div class="logo_container">

	  <a href="petfood.html">  <h1> Pet <span> Paradise </span></h1></a>
</div>	
    <ul class="navigation">
	   	<a href="petfood.html"><li> Home </li></a>
	    <a href="#"><li> About </li></a>
	    <a href="#"><li> Service </li></a>
	   	<a href="#"><li > Contact </li></a>
    </ul>

    </div>
  </div>

 <!--  Registration card -->
  <div class="container">
	 <div class="card">
          

  <form action="registration.php" method="post">

   <div class="container"> 
	<div class="card">
            <div class="img_container"><img src="food.png" alt="pet food" width="110" height="100">
    
  <h1 style="color:rgb(0, 77, 57);">Registration Form</h1>
  <br>
     
  <br>

  <div> 
  <label for="username"><b>Username</b></label>
  <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>"required>
  </div> 
    
  <div> 
  <label for="email"><b>Email</b></label>
  <input type="text"  placeholder="email" name="email" value="<?php echo $email; ?>" required>
  </div> 

  <div> 
  <label for="password"><b>Password</b></label>
  <input type="password" placeholder="password"  name="password"  value="<?php echo ($_POST['password']);  ?>" required>
  </div>

  <div> 
  <label for="cpassword"><b>Confirm Password</b></label>
  <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo ($_POST['cpassword']); ?>" required>
  </div>


 
      <br>
       <input class="register_button"  class="input-field" | type="submit" name="create" value="Sign up">
       <p> Already a member? <a href="login.php">Sing in</a></p> 
    </div>
  </div>
</form>


<footer>
    <div class="footer-content">
      <ul class="socials">
		 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
         <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
         <li><a href="#"><i class="fa fa-youtube"></i></a></li>
         <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
      </ul>
      </div> 
 <div class="footer-bottom">
   <p> copyright &copy;2021 codeOpacity. designed by <span> BMCC students </spam></p>
 </div>
 </footer>

</body>
</html>