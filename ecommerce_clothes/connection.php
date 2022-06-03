<?php 
	$conn=mysqli_connect("localhost","root","","ecommerce_clothes");

	if(!$conn){
		die("Connection Failed".mysqli_connect_error());
	}
			echo "Connected Successful";
?>