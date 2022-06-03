<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="newproduct.css">
</head>
<body>
	<form action="add-product.php" method="post">
		<div class="logo">Sassy&</br>Suave</div>

		<div class="new-product">
			<label for="productname">Product Name</label>
			<input type="text" name="productname" placeholder="Enter Product Name">

			<label for="productdesc">Product Description</label>
			<input type="text" name="productdesc" placeholder="Enter Product Description">

			<label for="productimage">Product Image</label>
			<input type="text" name="productimage" placeholder="Enter Product Image">

			<label for="pass">Password</label>
			<input type="password" name="pass" placeholder="Enter Password">

			<!-- <label for="pass">Re-enter Password</label>
			<input type="password" name="pass" placeholder="Enter email address"> -->
			<button value="submit">Login</button>

		</div>

	</form>

</body>
</html>