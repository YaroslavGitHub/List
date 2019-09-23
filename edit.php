<?php include("db.php"); 

		$id = $_REQUEST["id"];
		$id = mysqli_real_escape_string($connection, $id);
		
		$title = $_REQUEST["secondname"];
		$title = strip_tags($title);
		$title = mysqli_real_escape_string($connection, $title);
		
		$content = $_REQUEST["firstname"];
		$content = strip_tags($content);
		$content = mysqli_real_escape_string($connection, $content);

		$email = $_REQUEST["email"];
		$email = strip_tags($email);
		$email = mysqli_real_escape_string($connection, $email);
	
		if((strlen($title) > 0) && (strlen($content) > 0)){
				
			$query = "UPDATE `users` SET `secondname` = '$title', `firstname` = '$content', `email` = '$email' WHERE `id` = '$id'";
			
			mysqli_query($connection, $query);
			
			header("Location: /index.php");
			
			exit();
			
		}
			
		$query = "SELECT * FROM `users` WHERE `id` = '$id'";
			
		$result = mysqli_query($connection, $query);
			
		$row = mysqli_fetch_array($result);

?>
<?php include("header.php"); ?>
	
				<h3 class="mb-3">Edit the</h3>
				
				<form method="POST">
				
					<div class="form-group">
						<label for="secondname" class="form-control-label">Secondname: </label>
						<input type="text" class="form-control" name="secondname" id="secondname" required value="<?php echo $row["secondname"]; ?>">
					</div>
					
					<div class="form-group">
						<label for="firstname" class="form-control-label">Firstname: </label>
						<input class="form-control" name="firstname" id="firstname" required value="<?php echo $row["firstname"]; ?>">
					</div>

					<div class="form-group">
						<label for="email" class="form-control-label">Email: </label>
						<input type="email" class="form-control" name="email" id="email" value="<?php echo $row["email"]; ?>">
					</div>
					
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<button type="submit" class="btn btn-lg btn-success">
						<i class="fa fa-edit"></i>
						Save
					</button>
				
				</form>
				
<?php include("footer.php"); ?>	