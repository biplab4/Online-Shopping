<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body background="images/woman.jpg">
	<div class="banner">
		
		   <h1>ShopUS Online</h1>
		   <em><strong>Varieties Here for you</strong></em>
			  

		
	</div>

	<div class="cart">

	 <form class="form1 "style="background-color:black; color: tomato; text-align: center; " method="POST" action="login1.php">
        <h2>Log-in</h2>
		Username:<input type="text" name="uname" required="required"><br>
		<br>
		Password:<input type="text" name="pword" required="required"><br>
		<br>
		<input type="submit" name="Login" value="Login" ><br>
	</form>

	<form class="form2" style="background-color:black; color: tomato; text-align: center;">
		<br>
		<strong>Don't Have an account yet?</strong><br>
			<br>
				<button><a style="text-decoration: none; color: black" href="signup.php">Create Account</a></button>
		</form>
		
	</div>


</body>
</html>