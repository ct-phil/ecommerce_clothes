<?php
	require("connection.php");

	$first_name=$_POST["fname"];
	$last_name=$_POST["lname"];
	$email=$_POST["email"];
	$password=$_POST["pass"];

	$sql="INSERT INTO Customer (firstname, lastname, email, password) 
	VALUES ('$first_name','$last_name','$email','$password')";

	if(mysqli_query($conn,$sql)){
		echo "User Registered Successfully";
	}else{
		echo "Error".mysqli_error($conn);
	}

?>