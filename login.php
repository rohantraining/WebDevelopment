<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign In Page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
	body{
		background-image: url('images/b3.jpg');
		background-repeat: no-repeat;
        background-size: cover;
	}
  </style>
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
	  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Not a member yet ? <a href="register.php" style="color:blue;">Sign up</a>
	<p>
	<p>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; OR
	</p>
	<p>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Click this to <a href="index.html" style="color:red;">Go to Home Page</a>
  	</p>
	</p>

	</p>
  </form>
</body>
</html>