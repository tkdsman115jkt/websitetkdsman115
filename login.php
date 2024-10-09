<!DOCTYPE html>
<html>
<head>
	<title>LOGIN ABSENSI</title>
	<link rel="stylesheet" type="text/css" href="stylepenguji.css">
</head>
<body>
	<form action="checklogin.php" method="POST">
	<div class="login-box">
		<img src="avatartaekwondo.png" class="avatar">
		<h1>LOGIN</h1>
		<form>
		<p>Username</p>
		<input type="text" id="username"  name="username" placeholder="Enter Username">
		<p>Password</p>
		<input type="Password" name="Password" placeholder="Enter Password">
		<input type="submit" name="submit" value="Login">
		<center>
		<a href="index.php" class="btn">BERANDA</a>
	    </center>
	    </form>
	</div>
</form>
</body>
</html>