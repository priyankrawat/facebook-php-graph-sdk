<?php
	require_once "config.php";

	if (isset($_SESSION['access_token'])) {
		header('Location: index.php');
		exit();
	}

	$redirectURL = "http://localhost/fb/fb-callback.php";
	$permissions = ['email'];
	$loginURL = $helper->getLoginUrl($redirectURL, $permissions);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
	<link rel="stylesheet" type="text/css" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body style="background-color: #3c4248">


	<div class="card text-white mb-3" style="border: 3px 
  
  height: 100px; background-color: #7c8084 ;">
 
  <div class="card-body">
    <h5 class="card-title"></h5>
    <div class="row justify-content-center">
			<div class="col-md-6 col-md-offset-3" align="center">
				
					<h3>Facebook Login with PHP SDK</h3>
				
			</div>
		</div>
  </div>
</div>





    

	<div class="card text-white mb-3" style="margin: auto;
  width: 40%;
  border: 3px 
  padding: 10px;
  height: 100px; background-color: #afc8e0 ;margin-top: 50px">
 
  <div class="card-body">
    <h5 class="card-title"></h5>
    <div class="row justify-content-center">
			<div class="col-md-6 col-md-offset-3" align="center">
				
					<input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="Log In With Facebook" class="btn btn-primary">
				
			</div>
		</div>
  </div>
</div>

<div class="footer-copyright text-center py-3" style="background-color: #7c8084 ; position: fixed; left:0; bottom:0; width: 100%;">
Made with <i class="icon ion-heart"></i> by Priyank Rawat.
</div>
</body>
</html>