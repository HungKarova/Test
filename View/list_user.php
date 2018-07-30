<!DOCTYPE html> 
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<style type="text/css">
			body{
				width:90%;
				margin: 0 auto;
			}
		</style>
		
	</head>
	<body>
	<h1> Welcome to My System</h1>
	<form action="" method ="POST" role="form">
		<div>
			<input type="text" name="info_search" class="form-control" placeholder="Enter Email or Name or Phone">
			<input type="hidden" name="action" value="search_info">
			<button type="submit" name="submit">Search </button>
		</div>

	</form>

		<h1 class="text-center">LIST USERS</h1>
		<a href=".?action=logout">Logout</a>

		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Email</th>
					<th>Password</th>
					<th>FirstName</th>
					<th>LastName</th>
					<th>Phone</th>
					<th>Avatar</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($users as $key =>$value): ?>
				<tr>
					<td><?php echo $value['ID'];?></td>
					<td><?php echo $value['email'];?></td>
					<td><?php echo $value['password'];?></td>
					<td><?php echo $value['firstname'];?></td>
					<td><?php echo $value['lastname'];?></td>
					<td><?php echo $value['phone'];?></td>
					<td><?php echo $value['avatar'];?></td>
					<td>
						<form action="." method ="POST">
						<input type="hidden" name="ID" value="<?php echo $value['ID'];?>">
						<input type="hidden" name="action" value="edit_user">
						<input type="submit" name="submit" value="Edit"> 
						
						</form>
					</td>
					<td>
						<form action="." method ="POST">
						<input type="hidden" name="ID" value="<?php echo $value['ID'];?>">
						<input type="hidden" name="action" value="delete_user">
						<input type="submit" name="submit" value="Delete">
						
						</form>
					</td>


				</tr>
				<?php
					endforeach;
				?>
			</tbody>
		</table>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>