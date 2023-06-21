<?php include('functions.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" href="./css/login.css">
</head>

<body>
	<div class=" header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" placeholder="Username" autocomplete="off">
		</div>	
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" placeholder="password" autocomplete="off">
		</div>
		<div class=" input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
</body>

</html>