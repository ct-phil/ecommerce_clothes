<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
	<form action="process-register.php" method="post">
		<div class="logo">Sassy&</br>Suave</div>

		<div class="signup-info">
			<label for="fname">First Name</label>
			<input type="text" name="fname" placeholder="Enter First Name">

			<label for="lname">Last Name</label>
			<input type="text" name="lname" placeholder="Enter Last Name">

			<label for="email">Email</label>
			<input type="text" name="email" placeholder="Enter email address">

			<label for="pass">Password</label>
			<input type="password" name="pass" placeholder="Enter Password">

			<!-- <label for="pass">Re-enter Password</label>
			<input type="password" name="pass" placeholder="Enter email address"> -->
			<button value="submit">Login</button>

		</div>

	</form>

</body>
</html>