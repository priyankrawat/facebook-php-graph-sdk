<?php
	session_start();

	if (!isset($_SESSION['access_token'])) {
		header('Location: login.php');
		exit();

   
	}

	if (isset($_GET['logout'])) {
		unset($_SESSION['access_token']);
		header('Location: login.php');
		exit();

   
	}



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
    <link rel="stylesheet" type="text/css" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>


	<div class="jumbotron">
    <h1 style="text-align: center;">User Details</h1>      
      </div>
	<div class="container" style="margin-top: 100px">
		<div class="row justify-content-center">
			<div class="col-md-3">
				<img src="<?php echo $_SESSION['userData']['picture']['url'] ?>">
			</div>

			<div class="col-md-9">
				<table class="table table-hover table-bordered">
					<tbody>
						<tr>
							<td>ID</td>
							<td><?php echo $_SESSION['userData']['id'] ?></td>
						</tr>
						<tr>
							<td>First Name</td>
							<td><?php echo $_SESSION['userData']['first_name'] ?></td>
						</tr>
						<tr>
							<td>Last Name</td>
							<td><?php echo $_SESSION['userData']['last_name'] ?></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><?php echo $_SESSION['userData']['email'] ?></td>
						</tr>


						<tr>
							<td>Logout</td>
							<td><?php echo '<a href="?logout">Logout</a>'; ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="footer-copyright text-center py-3" style="background-color: #7c8084 ; position: fixed; left:0; bottom:0; width: 100%;">
Made with <i class="icon ion-heart"></i> by Priyank Rawat.
</div>
</body>
</html>