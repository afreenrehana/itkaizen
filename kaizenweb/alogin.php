<?php include('aserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>admin login</title>
  <link rel="stylesheet" type="text/css" href="astyle.css">
</head>
<body>
  <div class="header">
  	<h2>Admin Login</h2>
  </div>
	 
  <form method="post" action="alogin.php">
  	<?php include('aerrors.php'); ?>
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
    <hr>
    <p>
    <a href="index.html">Go To Home Page<a>
    </p>
  	
  </form>
</body>
</html>