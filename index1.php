<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
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
	<h2>Registration Page</h2>
</div>
	
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		<br>
		
    	<p> <a href="index1.php?logout='1'" style="color: green;">Click here to Sign in</a> 
		 
	    </p>
		<p>
			OR
		</p> 
		<p>
			<a href="index.html" style="color:red;">Go to Home Page</a>
		</p>
    <?php endif ?>
</div>

</body>
</html>