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
			form{
				width:60%;
				margin: 0 auto;
			}
			legend{
				text-align: center;

			}
		</style>
		
	</head>
	<body>
		<form action="" method="POST" role="form">
			<legend>EDIT USER</legend>

			<input type="hidden" name="ID" value="<?php echo $us['ID'] ?>"
			<div class="form-group">
				<label for="">Email</label>
				<input name="email" type="email" class="form-control" id="" placeholder="Input field" value="<?php echo $us['email'] ?>">
			</div>
			<div class="form-group">
				<label for="">Password</label>
				<input name="password" type="password" class="form-control" id="" placeholder="Input field" value="<?php echo $us['password'] ?>">
			</div>	
			<div class="form-group">
				<label for="">FirstName</label>
				<input name="firstname" type="text" class="form-control" id="" placeholder="Input field" value="<?php echo $us['firstname'] ?>">
			</div>
			<div class="form-group">
				<label for="">LastName</label>
				<input name="lastname" type="text" class="form-control" id="" placeholder="Input field" value="<?php echo $us['lastname'] ?>">
			</div>
			<div class="form-group">
				<label for="">Phone</label>
				<input name="phone" type="text" class="form-control" id="" placeholder="Input field" value="<?php echo $us['phone'] ?>">
			</div>


			<input type="hidden" name="action" value='update_user'>
			<button type="submit" class="btn btn-primary">Update User</button>
			<a href="?action=form_login">Login</a>
		</form>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>