<?php session_start();?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Clement Hotels</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css"> -->
</head>
<body>
<!-- Navigation -->
<nav class = "navbar navbar-expand-md navbar-light bg-light sticky-top">
<div class = "container-fluid">
	<a class="navbar-brand" href="index.php"><img src = "img/logo.png" height = "80" width = "80"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class ="collapse navbar-collapse" id="navbarResponsive">
		<ul class = "navbar-nav ml-auto">
			<li class="nav-item active">
				<a class="nav-link" href="index.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="about.php">About</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="services.php">Services</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="bform.php">Booking Form</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="report.php">Report</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="connect.php">Connect</a>
				<a href="logout.php">log out</a>
			</li>
		</ul>
	</div>
</div>
</nav>

<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
	</ul>
	<div class = "carousel-inner">
		<div class="carousel-item active">
			<img src="img/home.jpeg">
		</div>
	</div>
</div>

<!--- Welcome Section -->
<div class="container-fluid padding">
<div class="row welcome text-center">
	<div class="col-12">
		<h1 class="display-4">The ClementHotel</h1>
	</div>
	<hr>
	<div class="col-12">
		<p class = "lead">Welcome to Clement Hotels&copy;. We look forward to making your stay worth while.
		Our esteemed chefs and waiters are always at your service. Feel free to air your views regarding 
		issues you find not up to snuff and the management will address them.</p>
	</div>
</div>
</div>

<!--- Three Column Section -->
<div class="container-fluid padding">
<div class="row text-center padding">
	
</div>
<hr class="my-4">
</div>

<!--- Two Column Section -->
<div class="container-fluid padding">
<div class="row welcome text-center">	
	<div class="col-12">
		<h1 class="display-4">What we offer</h1>
		<hr>
		<p>We offer quite a lot of services such as meals, guest rooms, motels, swimming facilities and a lot more
		based on your choices and preferences.</p>
	</div>
	<div class="col-md-6 lead">	
		<h3>Local Cuisines</h3>
		<p> </p>
		<img src="img/meal1.jpeg" class="image-fluid" height="250" width="300">
		<p> </p>
		<p>We are keen to observe various cultural heritages and therefore we ensure that our chefs can cook what 
		you locally prefer.</p>
		<a href="services.php" class="btn btn-primary">Services</a>
		<br>
	</div>
	<div class="col-md-6 lead">	
		<h3>Excuisite Cuisines</h3>
		<p> </p>
		<img src="img/meal2.jpeg" class="image-fluid" height="250" width="300">
		<p> </p>
		<p>Our chefs are well versed in preparing a number of globally celebrated foods. This provides our customers
		with a chance to enjoy a foreign quicine locally.</p>
		<a href="services.php" class="btn btn-primary">Services</a>
		<br>
	</div>
</div>
</div>
<hr class="my-4">

<!--- Meet the team -->
<div class="container-fluid padding">
<div class="row welcome text-center">
	<div class="col-12">
		<h1 class="display-4">Our team</h1>
		<hr>
	</div>
	<div class="col-12">
		<p class = "lead">We have a team of world class concierge that are working towards your satisfaction.
		They are open with our customers and are trained to work with you anytime.</p>
	</div>
</div>
</div>

<!--- Cards -->
<div class="container-fluid padding">
<div class="row padding lead">
	
	
</div>
</div>
<hr class="my-4">

<!--- Two Column Section -->
<div class="container-fluid padding">
<div class="row padding lead">
	<div class="col-lg-6">
		<h1 class="display-4">For website</h1>
		<p>We are here for you.</p>
		<br>
	</div>
	<div class="col-lg-6">
		<h1 class="display-4">Reach us out to advertise your business</h1>
		<p>We take pride in your success.</p>
	</div>
</div>
</div>
<hr class="my-4">

<!--- Connect -->
<div class="container-fluid padding">
<div class="row welcome text-center">
	<div class="col-12">
		<h1 class="display-4">FIND OUR WEBSITE DEVELOPERS AT</h1>
		
		<hr>
	</div>
</div>
</div>


<!--- Footer -->
<footer>
<div class="container-fluid padding">
<div class="row text-center">
	<div class="col-md-6">
		<img src = "img/logo.png" height = "60" width = "60">
		<hr class="light">
		<h5>AFRICA</h5>
		<hr class="light">
		<p>Clement Hotels Centre</p>
		<p></p>
		<p>The Hive Nairobi</p>
		<p>0726228330</p>
		<p>clementhotels@gmail.com</p>
		<p>Nairobi, Kenya</p>
	</div>
	
	<div class="col-md-6">
		<hr class="light">
		<h5>Social Media</h5>
		<hr class="light">
		<a href="https://web.facebook.com/"><i class = "fab fa-facebook"></i></a>
		<a href="https://twitter.com/"><i class = "fab fa-twitter"></i></a>
		<a href="https://mail.google.com/"><i class = "fab fa-google-plus-g"></i>
		<a href="https://www.instagram.com/"><i class = "fab fa-instagram"></i></a>
		<a href="https://www.youtube.com/"><i class = "fab fa-youtube"></i></a>
	</div>
	
	<div class="col-12">
		<hr class="light-100">
		<h5>&copy; 2021 CLEMENT HOTELS</h5>
	</div>
</div>
</div>
</footer>

</body>
</html>