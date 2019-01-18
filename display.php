<?php
require_once('connect.php');
$select ="select * from crud";
$res = mysql_query($select);
?>
<!DOCTYPE html>
<html>
<head>
	<title>display data from database using php & mysql</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<table class="table">
				<tr>
					<th>#</th>
					<th>Full Name</th>
					<th>E-mail</th>
					<th>Mobile</th>
					<th>Gender</th>
					<th>Age</th>
					<th>Extras</th>
				</tr>
				<?php
				while($row = mysql_fetch_assoc($res)){
				?>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['firstname'] ." ". $row['lastname']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['mobile']; ?></td>
					<td><?php echo $row['gender']; ?></td>
					<td><?php echo $row['age']; ?></td>
					<td><a href="update.php?id=<?php echo $row['id']; ?>">Edit</a> <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
</body>
</html>