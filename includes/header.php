<?php
require 'config/config.php';


if (isset($_SESSION['username'])) {
	$userLoggedIn = $_SESSION['username'];
	$user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$userLoggedIn'");
	$user = mysqli_fetch_array($user_details_query);
}
else {
	header("Location: register.php");
}

?>

<html>
<head>
	<title>Členský web ČEZ EP pro údržbu</title>


	<!-- SIMON REDESIGN added head from template START -->
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <link rel="icon" href="https://getbootstrap.com/docs/3.3/favicon.ico">

	<!-- SIMON REDESIGN added head from template FINISH -->


	<!-- Javascript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

	<!-- SIMON REDESIGN added linked files from template START -->

	<!-- Bootstrap core CSS
	<link href="bootstrap.css" rel="stylesheet">
	-->

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="ie10-viewport-bug-workaround.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="jumbotron-narrow.css" rel="stylesheet">

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script src="ie-emulation-modes-warning.js"></script>

	<!-- SIMON REDESIGN added linked files from template FINISH -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	<div class="top_bar">
		<div class="container">
			<nav>
			<div class="col-xl-12 col-md-6">
				<div class="logo">
					<a href="index.php">Členský web ČEZ EP</a>
					<br>
				</div>
			</div>
			<div class="col-xl-12 col-md-6">
				<div class="smallmenu">
						<a href="#"> Přihlášený:
							<strong><?php echo $user['first_name']; ?></strong>
						</a>
						<a href="index.php">
							<i class="fa fa-home fa-lg"></i> Domů
						</a>

						<a href="includes/handlers/logout.php">
							<i class="fa fa-sign-out fa-lg"></i> Odhlásit
						</a>
				</div>
			</div>
			</nav>
		</div>
	</div>


	<div class="wrapper">
