

<?php

session_start();
include("includes/db.php");

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<div class="login">
	<h1>Admin Login</h1>
 
    <form method="post">
    	<input type="text" name="admin_email" placeholder="Username" required="required" />
        <input type="password" name="admin_name" placeholder="Password" required="required" />
        <input type="submit" value="login" name="login"/>
    </form>
</div>
<h2 style="color:white;  text-align:center; padding:20px;"><?php echo @$_GET['logout']; ?></h2>
</body>
</html>


<?php

if(isset($_POST['login'])){
	
	$user_email =$_POST['admin_email'];
	$user_pass =$_POST['admin_name'];
	$sel_admin ="select * from admins where admin_email='$user_email' AND admin_pass='$user_pass'";
	
	$run_admin = mysqli_query($con,$sel_admin);
	$check_admin=mysqli_num_rows($run_admin);
	if($check_admin==1){
		
		$_SESSION['admin_email']=$user_email;
		
		echo "<script>window.open('index.php?logged_in=You successfully logged in','_self')</script>";
		
		
	}
	
	else {
		echo "<script>alert('Admin Email or Password is incorrect,try again!')</script>";
		
		
		
		}
	
	}



?>
