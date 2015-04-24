<!DOCTYPE html>
<html>
<head>
<title>Payment Options</title>
</head>
<body>
<?php

include("includes/db.php");


?>


<div align="center" style="padding:20px;">

<h2>Payment options For You</h2>
<?php

$ip=getRealIpAddr();
$get_customer ="select * from customers where customer_ip='$ip'";
$run_customer =mysqli_query($con, $get_customer);
$customer =mysqli_fetch_array($run_customer);
$customer_id=$customer['customer_id'];

?>
<b>Pay With&nbsp;</b><a href="http://www.paypal.com"><img src="images/paypal_logo _Pay_With.jpg" height="80" width="200"></a><b>or <a href="order.php?c_id=<?php echo $customer_id;?>"> Pay Offline</a></b><br><br>
<b>If You Selected "Pay Offline" then please check email or account to find the invoice no for your order</b>




</div></body>
</html>