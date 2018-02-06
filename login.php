<?php
	require_once "config.php";

	// if (isset($_SESSION['access_token'])) {
	// 	header('Location: index.php');
	// 	exit();
	// }

	$redirectURL = "http://localhost/FacebookLogin/fb-callback.php";
	$permissions = [ 'email' ,'user_friends' ];
	// $permissions = ['user_friends'];
	$loginURL = $helper->getLoginUrl($redirectURL, $permissions);
	
	// echo "$loginURL";

 // optional
   
   

		 
		 

?>


<!DOCTYPE html>
	<html>
			<head>
				<title>syed</title>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
				<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
				<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
				<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
				<link rel="stylesheet" type="text/css" href="style.css">
				<!-- <script type="text/javascript" scr="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
				<script type="text/javascript" scr="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
			</head>
			<body>

				<nav class="navbar navbar-default ">
					<div class="container">
							 	<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded ="false" >
										<span class="sr-only">toggle nevigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a href="#" class="navbar-brand"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Gallary </a>
							  	</div>
								<div class="collapse  navbar-collapse" id="bs-nav-demo">

									<ul class="nav navbar-nav">

							    		<li>
											<a href="#">Home </a>
										</li>

										<li>
											<a href="#">About </a>
										</li>
										<li>
											<a href="#">Contact </a>
										</li>
									</ul>
									<ul class="nav navbar-nav navbar-right">
										<li>
											<a href="#">Sign-Up <i class="fa fa-user-plus"></i> </a>
										</li>
										<li>
											<a href="#" onclick="window.location = '<?php echo $loginURL ?>';" > Login With Facebook 
												<i class="fa fa-user"></i>  
											</a>
										</li>
									</ul >	
								</div>
					</div>
				</nav>
				<div class="container">
					<div class="row">
						<div class="col-lg-12" id="me">
							<h1>ME</h1>
							<h4>This is my site</h4>
							<hr>
							<button class="btn btn-default btn-lg"><i class="fa fa-paw" aria-hidden="true"></i> Press Button</button>
						</div>
				    </div>
				</div>
			</body>
	</html>