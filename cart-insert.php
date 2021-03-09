<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="banner" style="height: 400px; background-position: fixed; text-align: center;">
		<img src="images/woman-slider1.jpg">
		
		   <h1>Thank you for shopping with ShopUS.</h1>
		   <em><strong>Your order has been placed. Soon you will receive a call.</strong></em>
		   <p><strong>For more order <a href="login1.php">Click here. </a></strong></p>
		   
			  
	</div>
<?php

	$con = mysqli_connect('127.0.0.1','root','');


	mysqli_select_db($con,'project');
	$Fullname = $_POST['fname'];
	$Address = $_POST['address'];
	$Phone = $_POST['phone'];
	$Quantity = $_POST['qty'];
	$q= "select * from cart fullname = '$Fullname' && address = '$Address' && phone_no= '$Phone' && quantity = '$Quantity'";
	mysqli_query ($con,$q);


	$sql = "insert into cart (`fullname`,`address`,`phone_no`,`quantity`) VALUES('$Fullname','$Address','$Phone','$Quantity')";

	mysqli_query($con,$sql);
?>
</body>
</html>