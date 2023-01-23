<?php

session_start();

 if (!isset($_SESSION['username'])){
  header("Location:login.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<html>
<head>
<meta charset="UTF-8">
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="welcome/welcome1.css">
<title>Welcome</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<style>
body {
	background-color: royalblue;
}

.prod-info-main {
    border: 1px solid #CEEFFF;
    margin-bottom: 20px;
    margin-top: 10px;
    background: #fff;
    padding: 6px;
    -webkit-box-shadow: 0 1px 4px 0 rgba(21,180,255,0.5);
    box-shadow: 0 1px 1px 0 rgba(21,180,255,0.5);

}

.prod-info-main .product-image {
    background-color: #EBF8FE;
    display: block;
    min-height: 238px;
    overflow: hidden;
    position: relative;
    border: 1px solid #CEEFFF;
    padding-top: 40px;
}

.rotprod{
    -webkit-transition-duration: 0.8s;
    -moz-transition-duration: 0.8s;
    -o-transition-duration: 0.8s;
    transition-duration: 0.8s;
    }  
 
.rotprod:hover  
{
    -webkit-transform:rotate(360deg);
    -moz-transform:rotate(360deg);
    -o-transform:rotate(360deg);
} 

.prod-info-main .product-deatil {
    border-bottom: 1px solid #dfe5e9;
    padding-bottom: 17px;
    padding-left: 16px;
    padding-top: 16px;
    position: relative;
    background: #fff
}

.product-content .product-deatil h5 a {
    color: #2f383d;
    font-size: 15px;
    line-height: 19px;
    text-decoration: none;
    padding-left: 0;
    margin-left: 0
}

.prod-info-main .product-deatil h5 a span {
    color: #9aa7af;
    display: block;
    font-size: 13px
}

.prod-info-main .product-deatil span.tag1 {
    border-radius: 50%;
    color: #fff;
    font-size: 15px;
    height: 50px;
    padding: 13px 0;
    position: absolute;
    right: 10px;
    text-align: center;
    top: 10px;
    width: 50px
}

.prod-info-main .product-deatil span.sale {
    background-color: #21c2f8
}

.prod-info-main .product-deatil span.discount {
    background-color: #71e134
}

.prod-info-main .product-deatil span.hot {
    background-color: #fa9442
}

.prod-info-main .description {
    font-size: 12.5px;
    line-height: 20px;
    padding: 10px 14px 16px 19px;
    background: #fff
}

.prod-info-main .product-info {
    padding: 11px 19px 10px 20px
}

.prod-info-main .product-info a.add-to-cart {
    color: #2f383d;
    font-size: 13px;
    padding-left: 16px
}

.prod-info-main name.a {
    padding: 5px 10px;
    margin-left: 16px
}

.product-info.smart-form .btn {
    padding: 6px 12px;
    margin-left: 12px;
    margin-top: -10px
}

.load-more-btn {
    background-color: #21c2f8;
    border-bottom: 2px solid #037ca5;
    border-radius: 2px;
    border-top: 2px solid #0cf;
    margin-top: 20px;
    padding: 9px 0;
    width: 100%
}

.product-block .product-deatil p.price-container span,
.prod-info-main .product-deatil p.price-container span,
.shipping table tbody tr td p.price-container span,
.shopping-items table tbody tr td p.price-container span {
    color: #21c2f8;
    font-family: Lato, sans-serif;
    font-size: 24px;
    line-height: 20px
}

.product-info.smart-form .rating label {
    margin-top:15px;
    
}

.prod-wrap .product-image span.tag2 {
    position: absolute;
    top: 10px;
    right: 10px;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    padding: 10px 0;
    color: #fff;
    font-size: 11px;
    text-align: center
}

.prod-wrap .product-image span.tag3 {
    position: absolute;
    top: 10px;
    right: 20px;
    width: 60px;
    height: 36px;
    border-radius: 50%;
    padding: 10px 0;
    color: #fff;
    font-size: 11px;
    text-align: center
}

.prod-wrap .product-image span.sale {
    background-color: #57889c;
}

.prod-wrap .product-image span.hot {
    background-color: #a90329;
}

.prod-wrap .product-image span.special {
    background-color: #3B6764;
}
.shop-btn {
    position: relative
}

.shop-btn>span {
    background: #a90329;
    display: inline-block;
    font-size: 10px;
    box-shadow: inset 1px 1px 0 rgba(0, 0, 0, .1), inset 0 -1px 0 rgba(0, 0, 0, .07);
    font-weight: 700;
    border-radius: 50%;
    padding: 2px 4px 3px!important;
    text-align: center;
    line-height: normal;
    width: 19px;
    top: -7px;
    left: -7px
}

.product-deatil hr {
    padding: 0 0 5px!important
}

.product-deatil .glyphicon {
    color: #3276b1
}

.product-deatil .product-image {
    border-right: 0px solid #fff !important
}

.product-deatil .name {
    margin-top: 0;
    margin-bottom: 0
}

.product-deatil .name small {
    display: block
}

.product-deatil .name a {
    margin-left: 0
}

.product-deatil .price-container {
    font-size: 24px;
    margin: 0;
    font-weight: 300;
    
}

.product-deatil .price-container small {
    font-size: 12px;
    
}

.product-deatil .fa-2x {
    font-size: 16px!important
}

.product-deatil .fa-2x>h5 {
    font-size: 12px;
    margin: 0
}

.product-deatil .fa-2x+a,
.product-deatil .fa-2x+a+a {
    font-size: 13px
}

.product-deatil .certified {
    margin-top: 10px
}

.product-deatil .certified ul {
    padding-left: 0
}

.product-deatil .certified ul li:not(first-child) {
    margin-left: -3px
}

.product-deatil .certified ul li {
    display: inline-block;
    background-color: #f9f9f9;
    padding: 13px 19px
}

.product-deatil .certified ul li:first-child {
    border-right: none
}

.product-deatil .certified ul li a {
    text-align: left;
    font-size: 12px;
    color: #6d7a83;
    line-height: 16px;
    text-decoration: none
}

.product-deatil .certified ul li a span {
    display: block;
    color: #21c2f8;
    font-size: 13px;
    font-weight: 700;
    text-align: center
}

.product-deatil .message-text {
    width: calc(100% - 70px)
}
/*--Button effect classes for add to cart*/ 
.btn-cart{
    border-radius: 0;
    position: relative;
    color: #fff;
    border:1px solid transparent;
    text-transform: uppercase;
    transition: all 0.40s ease 0s;
}
.btn-cart:after{
    content: "\f07a";
    font-family: fontawesome;
    position: absolute;
    right: 6px;
    top: -4px;
    opacity: 0;
    color: #fff;
    transition: all 0.40s ease 0s;
}
.btn-cart:hover:after{
    top:40%;
    opacity: 5;
}
.btn-cart span{
    display: block;
    transition: all 0.70s linear 0s;
}
.btn-cart:hover span{
    transform: translate(-9px);
}

/*--Button effect classes for More info*/ 
.btn-info{
    border-radius: 0;
    position: relative;
    color: #fff;
    border:1px solid transparent;
    text-transform: uppercase;
    transition: all 0.40s ease 0s;
}
.btn-info:after{
    content: "\f129";
    font-family: fontawesome;
    position: absolute;
    right: 6px;
    top: -4px;
    opacity: 0;
    color: #fff;
    transition: all 0.40s ease 0s;
}
.btn-info:hover:after{
    top:40%;
    opacity: 5;
}
.btn-info span{
    display: block;
    transition: all 0.70s linear 0s;
}
.btn-info:hover span{
    transform: translate(-9px);
}

@media only screen and (min-width:1024px) {
    .prod-info-main div[class*=col-md-4] {
        padding-right: 0
    }
    .prod-info-main div[class*=col-md-8] {
        padding: 0 13px 0 0
    }
    .prod-wrap div[class*=col-md-5] {
        padding-right: 0
    }
    .prod-wrap div[class*=col-md-7] {
        padding: 0 13px 0 0
    }
    .prod-info-main .product-image {
        border-right: 1px solid #dfe5e9
    }
    .prod-info-main .product-info {
        position: relative
    }
}
</style>

</head>

<body>
	

  <!--Header -->
  <div class="header">
    <div class="inner_header">
      <div class="logo_container">

    <!-- sidebar -->
    <div class="w3-container">

    </div>
    <!-- Logo & name -->
        <h1> <a href="petfood.html"> Pet <span> Paradise </span></h1></a>
     </div> 

     <ul class="navigation">
        <a href="petfood.html"><li> Home </li></a>
        <a href="about.html"><li>About</li></a>
        <a href="#"><li> Service </li></a>
        <a href="#"><li> Contact </li></a>

         <!-- checkout -->
        <a href="checkout.html">
        <img src="http://www.clker.com/cliparts/l/z/3/L/h/3/white-shopping-cart-md.png" 
		class="w3-right w3-margin-right" style="width:60px; "></a>
    </ul>

   <!--logout button function -->   
<div class="containerlogout">
        <a href="logout.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
</div>

    </div>
  </div>

<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left"
 style="display:none;z-index:2;width:10%;min-width:200px" id="mySidebar">

 <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button">Supplies</a>
  <a href="#food" onclick="w3_close()" class="w3-bar-item w3-button">Cats</a>
  <a href="#checkout.html" onclick="w3_close()" class="w3-bar-item w3-button">Dogs</a>
</nav>


<!--Greeting -->
<div class="containergrt">
<?php echo "<h1>welcome " . $_SESSION['username'] . "</h1>" ; ?>
</div>

<!--======================= -->


<div class="container">
<div class="col-xs-12 col-md-6">
	<!-- First product box start here-->
	<div class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image"> 
						<img src="welcome/items/pic1.png" class="img-responsive rotprod"> 
						<span class="tag2 hot">
							HOT
						</span> 
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
						<h5 class="name">
							<a href="#">
								dog food/Name here
							</a>
							<a href="#">
								<span>Product Category</span>
							</a>                            

						</h5>
						<p class="price-container">
							<span>$49.86</span>
						</p>
						<span class="tag1"></span> 
				</div>
				<div class="description">
					<p>A Short product description here </p>
				</div>
				<div class="product-info smart-form">
					<div class="row">
						<div class="col-md-12"> 
							<a href="javascript:void(0);" class="btn btn-danger btn-cart"><span>Add to cart</span></a>
                            <a href="javascript:void(0);" class="btn btn-info"><span>More info</span></a>
						</div>
						<div class="col-md-12">
							<div class="rating">Rating:
								<label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>
								<label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- end product 1-->

</div>
<div class="col-xs-12 col-md-6">
	<!-- First product box start here-->
	<div class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image"> 
						<img src="welcome/items/pic2.png" alt="194x228" class="img-responsive rotprod"> 
						<span class="tag2 hot">
							HOT
						</span> 
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
						<h5 class="name">
							<a href="#">
								Product Code/Name here <span>Product Category</span>
							</a>
						</h5>
						<p class="price-container">
							<span>$47.28</span>
						</p>
						<span class="tag1"></span> 
				</div>
				<div class="description">
					<p>A Short product description here </p>
				</div>
				<div class="product-info smart-form">
					<div class="row">
						<div class="col-md-12"> 
							<a href="javascript:void(0);" class="btn btn-danger btn-cart"><span>Add to cart</span></a>
                            <a href="javascript:void(0);" class="btn btn-info"><span>More info</span></a>
						</div>
						<div class="col-md-12">
							<div class="rating">Rating:
								<label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>
								<label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product 2-->

</div>
<div class="col-xs-12 col-md-6">
<!-- First product box start here-->
	<div class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image"> 
						<img src="welcome/items/pic3.png" class="img-responsive rotprod"> 
						<span class="tag3 special">
							Special
						</span> 
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
						<h5 class="name">
							<a href="#">
								Product Code/Name here <span>Product Category</span>
							</a>
						</h5>
						<p class="price-container">
							<span>$58.75</span>
						</p>
						<span class="tag1"></span> 
				</div>
				<div class="description">
					<p>A Short product description here </p>
				</div>
				<div class="product-info smart-form">
					<div class="row">
						<div class="col-md-12"> 
							<a href="javascript:void(0);" class="btn btn-danger btn-cart"><span>Add to cart</span></a>
                            <a href="javascript:void(0);" class="btn btn-info"><span>More info</span></a>
						</div>
						<div class="col-md-12">
							<div class="rating">Rating:
								<label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>
								<label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product 3 -->

</div>
<div class="col-xs-12 col-md-6">
	<!-- First product box start here-->
	<div class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image"> 
						<img src="welcome/items/pic4.png" alt="194x228" class="img-responsive rotprod"> 
						<span class="tag2 sale">
							SALE
						</span> 
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
						<h5 class="name">
							<a href="#">
								Product Code/Name here <span>Product Category</span>
							</a>
						</h5>
						<p class="price-container">
							<span>$67.98</span>
						</p>
						<span class="tag1"></span> 
				</div>
				<div class="description">
					<p>A Short product description here </p>
				</div>
				<div class="product-info smart-form">
					<div class="row">
						<div class="col-md-12"> 
							<a href="javascript:void(0);" class="btn btn-danger btn-cart"><span>Add to cart</span></a>
                            <a href="javascript:void(0);" class="btn btn-info"><span>More info</span></a>
						</div>
						<div class="col-md-12">
							<div class="rating">Rating:
								<label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>
								<label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product 4 -->


</div>
<div class="col-xs-12 col-md-6">
	<!-- First product box start here-->
	<div class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image"> 
						<img src="welcome/items/pic5.png" alt="194x228" class="img-responsive rotprod"> 
						<span class="tag2 hot">
							HOT
						</span> 
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
						<h5 class="name">
							<a href="#">
								Product Code/Name here <span>Product Category</span>
							</a>
						</h5>
						<p class="price-container">
							<span>$22.37</span>
						</p>
						<span class="tag1"></span> 
				</div>
				<div class="description">
					<p>A Short product description here </p>
				</div>
				<div class="product-info smart-form">
					<div class="row">
						<div class="col-md-12"> 
							<a href="javascript:void(0);" class="btn btn-danger btn-cart"><span>Add to cart</span></a>
                            <a href="javascript:void(0);" class="btn btn-info"><span>More info</span></a>
						</div>
						<div class="col-md-12">
							<div class="rating">Rating:
								<label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>
								<label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product 5 -->


</div>
<div class="col-xs-12 col-md-6">
	<!-- First product box start here-->
	<div class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image"> 
						<img src="welcome/items/pic6.png" alt="194x228" class="img-responsive rotprod"> 
						<span class="tag2 hot">
							HOT
						</span> 
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
						<h5 class="name">
							<a href="#">
								Product Code/Name here <span>Product Category</span>
							</a>
						</h5>
						<p class="price-container">
							<span>$17.22</span>
						</p>
						<span class="tag1"></span> 
				</div>
				<div class="description">
					<p>A Short product description here </p>
				</div>
				<div class="product-info smart-form">
					<div class="row">
						<div class="col-md-12"> 
							<a href="javascript:void(0);" class="btn btn-danger btn-cart"><span>Add to cart</span></a>
                            <a href="javascript:void(0);" class="btn btn-info"><span>More info</span></a>
						</div>
						<div class="col-md-12">
							<div class="rating">Rating:
								<label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>
								<label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product 6-->

<!-- footer -->
<footer>
   <div class="footer-content">         
    <div class="footer-bottom">
        <p> copyright &copy;2021 codeOpacity. designed by <span> BMCC students </spam></p>
    </div>
     </div>
</footer>

</body>
</html>