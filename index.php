<?php include("db.php"); ?>
<?php include("header.php"); ?>
	
	<div class="mb-3 d-flex align-items-center">
		<span class="h3">List</span>
		<span class="h3 mr-3 ml-3">|</span>					
		<a href="./add.php" class="btn btn-success">
			<i class="fa fa-plus-square"></i>
			Add
		</a>
	</div>
	<div class="container">
	<table class="table table-hover">
    <thead>
      <tr>
        <th>Email</th>
        <th>Lastname</th>
        <th>Firstname</th>
				<th>Edit</th>
				<th>Delete</th>
      </tr>
    </thead>
		<tbody>
		
	<?php 

		$query = "SELECT * FROM `users` ORDER BY `email` DESC";
		
		$result = mysqli_query($connection, $query);
		
		while($row = mysqli_fetch_array($result)){
	
	?>
	
			<tr>
		  <td class="card-title">
			<i class="fa fa-envelope"></i> 
			<?php echo $row["email"]; ?>
		  </td>	 
			<td class="card-title">
				<?php echo $row["secondname"]; ?>
			</td>
			<td class="card-title">
				<?php echo $row["firstname"]; ?>
			</td>
			<td>	
			<a href="./edit.php?id=<?php echo $row["id"]; ?>" class="btn btn-outline-warning mr-2">
				<i class="fa fa-edit"></i>
				Edit	
			</a>
			</td>
			<td>
			<a href="./delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-outline-danger mr-2">
				<i class="fa fa-trash-alt"></i>
				Delete
			</a>
			</td>
			</tr>

	<?php }	?>

	</tbody>
	</table>
	
<?php include("footer.php"); ?>	


