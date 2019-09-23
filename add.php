<?php include("db.php"); 

		
		$title = $_REQUEST["secondname"];
		$title = strip_tags($title);
		$title = mysqli_real_escape_string($connection, $title);
		
		$content = $_REQUEST["firstname"];
		$content = strip_tags($content);
		$content = mysqli_real_escape_string($connection, $content);

		$email = $_REQUEST["email"];
		$email = strip_tags($email);
		$email = mysqli_real_escape_string($connection, $email);
	
		if((strlen($title) > 0) && (strlen($content) > 0) && (strlen($email) > 0)){
				
			$query = "INSERT INTO `users` (`secondname`, `firstname`, `email`) VALUES('$title','$content', '$email')";
			
			mysqli_query($connection, $query);
			
			header("Location: /index.php");
			
			exit();
			
		}

?>
<?php include("header.php"); ?>

<script>
function validateForm() {
  var x = document.forms["myForm"]["firstname"].value;
  if (x == "") {
    alert("Firstname must be filled out");
    return false;
  }
}
</script>
	
				<h3 class="mb-3">Add data</h3>
				
				<form name="myForm"  onsubmit="return validateForm()" method="POST">
				
					<div class="form-group">
						<label for="secondname" class="form-control-label">Secondname: </label>
						<input type="text" class="form-control" name="secondname" id="secondname" required>
					</div>
					
					<div class="form-group">
						<label for="firstname" class="form-control-label">Firstname: </label>
						<input type="text" class="form-control" name="firstname" id="firstname"></input>
					</div>
					
					<div class="form-group">
						<label for="email" class="form-control-label">Email: </label>
						<input type="email" class="form-control" name="email" id="email" required></input>
					</div>

					<button type="submit"  class="btn btn-lg btn-success">
						<i class="far fa-save"></i>
						Add
					</button>
					
				</form>
			
				
<?php include("footer.php"); ?>	