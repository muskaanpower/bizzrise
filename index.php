<?php
session_start();
include("includes/db.php");
include("functions/functions.php");

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>My Shop</title>
<link rel="stylesheet" href="styles/style.css" media="all"/>
</head>

<body>
<!--Main container starts-->
<div class="main_wrapper">
<!--header starts-->
<div class="header_wrapper">
<a href="bizzrisehome.php"><img src="images/logo.jpg" style="float:left;"/></a>
<img src="images/banner.gif" style="float:right;"/>
</div>

<!--header ends-->
<!--navigation baar starts-->
<div id="navbar">
<ul id="menu">

<li><a href="index.php">Home</a></li>
<li><a href="all_products.php">All Products</a></li>
<li><a href="customer/my_account.php">My Account</a></li>
<li><a href="customer_register.php">Sign up</a></li>
<li><a href="cart.php">Shopping Cart</a></li>
<li><a href="contact">Contact Us	</a></li>




</ul>

<div id="form">
<form method="get"  action="results.php" enctype="multipart/form-data">
<input type="text" name="user_query" placeholder="Search a Product" />
<input type="submit" name="search" value="search" />
</form>


</div>
</div>

<!--navigation bar ends-->
<div class="content_wrapper">

<div id="left_sidebar">  
<div id="sidebar_title"> Categories</div> 
<ul id="cats">
<?php getCats();
?>
</ul>
<div id="sidebar_title">Brands</div> 
<ul id="cats">
<?php getBrands();
?>

</ul>

</div>
<div id="right_content">
<?php
cart();?>
<div id="headline">

<div id="headline_content">
<?php
if(!isset($_SESSION['customer_email']))
{
	
	echo "<b>Welcome Guest!</b><b style='color:yellow'>Shopping Cart</b>";
	
	
	}
	else
	{
	echo"<b>Welcome:" ."<span style='color:skyblue'>".$_SESSION['customer_email']."<span>"."</b>"."<b style='color:yellow'>Your Shopping Cart</b>";	
	}
?>
<span>-Total Items:- <?php items(); ?> -Total Price:-<?php total_price();?>&nbsp;&nbsp; <a href="cart.php" style="color:#FF0;">Go to Cart</a>
&nbsp;<?php
if(!isset($_SESSION['customer_email'])){
echo  "<a href='checkout.php' style='color:#F93;'>Login</a>";
}

else{
	
	echo"<a href='logout.php' style='color:#F93;'>Logout</a>";
}
?>

</span>
</div>
</div>
  
<div id="product_box">

<?php getPro();

getCatPro();
getBrandPro();

?>

</div>
</div>
</div>

<div class="footer">


<h1 style="color:#000000; padding-top:30px; text-align:center;">&copy;2015 - By www.bizzrise.com</h1></div>








</div>
<!--Main container ends-->




</body>
</html>
