
<?php
 include('server.php');
 
 error_reporting(0);

 session_start();

 if (isset($_SESSION['username'])){
  header("Location:welcome.php");
}

if(isset($_POST['create'])){
  echo "user submitted,";
  $email = $_POST['email'];
  $password = md5($_POST['password']);

// Email and password should match 
  $sql = "SELECT * FROM user1 WHERE email = '$email' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  if($result->num_rows > 0){
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    header("Location: welcome.php");
    } else {
      echo "<script>alert('Wooops! Email or Password is Wrong.')</script>";
    }
}

?>


<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="regstyle.css">
	
	     <title>Login Registration</title>

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
        <a href="petfood.html"><li> About </li></a>
        <a href="petfood.html"><li> Service </li></a>
        <a href="petfood.html"><li> Contact </li></a>	 
		</ul>

    </div>
  </div>

  
 <!--  Login card -->
  <div class="container">
     <div class="card">
          
<form action="login.php" method="post">
    <div class="container">
      <div class="card">
            <div class="img_container"><img src="food.png" alt="Girl in a jacket" width="500" height="600">

       <h1 style="color:rgb(0, 77, 57);">Log in</h1>
       <br>
       <br>
       
  <div> 
  <label for="email"><b>Email</b></label>
  <input type="text"  placeholder="email" name="email" required>
  </div> 

  <div> 
  <label for="password"><b>Password</b></label>
  <input type="password" placeholder="password"  name="password"  required>
  </div>



      <br>
       <input class="register_button"  class="input-field" | type="submit" name="create" value="Log in">
       <p> Not yet a member? <a href="registration.php"> Sign up</a></p>
        
    </div>
  </div>
</form>

<!-- footer -->

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




