<?php
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
<a href="index.php"><img src="images/logo.jpg" style="float:left;"/></a>
<img src="images/banner.gif" style="float:right;"/>
</div>

<!--header ends-->
<!--navigation baar starts-->
<div id="navbar">
<ul id="menu">

<li><a href="index.php">Home</a></li>
<li><a href="all_products.php">All Products</a></li>
<li><a href="customer/my_account.php">My Account</a></li>
<li><a href="user_register.php">Sign up</a></li>
<li><a href="cart.php">Shopping Cart</a></li>
<li><a href="contact.php">Contact Us	</a></li>




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

<div id="headline">

<div id="headline_content">

<b>Welcome Guest!</b>
<b style="color:#FFFF00">Shopping Cart:</b>
<span>-Items:- -Price: </span>
</div>
</div>
<div id="product_box">

<?php 
if(isset($_GET['pro_id'])){
$product_id =$_GET['pro_id'];	
$get_products = "select * from products where product_id='$product_id'";
$run_products = mysqli_query($db,$get_products);
while($row_products=mysqli_fetch_array($run_products))
{
$pro_id=$row_products['product_id'];
$pro_title=$row_products['product_title'];
$pro_cat=$row_products['cat_id'];
$pro_brand=$row_products['brand_id'];
$pro_desc=$row_products['product_desc'];
$pro_price=$row_products['product_price'];
$pro_image1=$row_products['product_img1'];
$pro_image2=$row_products['product_img2'];
$pro_image3=$row_products['product_img3'];

echo"

<div id='single_product'>
<h3>$pro_title</h3> 
<img src='admin_area/product_images/$pro_image1' width='180' height='180'/><br>
<img src='admin_area/product_images/$pro_image1' width='250' height='250'/>
<img src='admin_area/product_images/$pro_image1' width='250' height='250'/>
<p><b>Price: Rs.$pro_price</b></p>
<p>$pro_desc</p>
<a href='index.php' style='float:left;'>Go Back</a>
<a href='index.php?add_cart=$pro_id'><button style='float:right;'>Add to Cart</button></a>

</div>
";

}
}

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
