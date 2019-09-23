<?php 

	include("db.php"); 
	
	$id = $_REQUEST["id"];
	
	$id = mysqli_real_escape_string($connection, $id);
			
	$query = "DELETE FROM `users` WHERE `id` = '$id'";
				
	mysqli_query($connection, $query);
	
	header("Location: /index.php");
			
?>