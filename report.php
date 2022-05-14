<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `bookingform` WHERE CONCAT(`cdate`, `odate`, `adults`, `children`, `rooms`, `fname`, `lname`, `idnum`, `phone`, `email`, `nationality`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `bookingform`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "clementhotels");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Clement Hotels</title>
	<style>
		table,tr,th,td
		{
			border: 1px solid black;
		}
	</style>
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
	<a class="navbar-brand" href="index.html"><img src = "img/logo.png" height = "80" width = "80"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class ="collapse navbar-collapse" id="navbarResponsive">
		<ul class = "navbar-nav ml-auto">
			<li class="nav-item">
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
			<li class="nav-item active">
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
			<img src="img/report.jpg" >
		</div>
	</div>
</div>

<!--- Jumbotron -->
<div class="container-fluid">
<div class="row jumbotron">
	<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
		<p class="lead">&copy;CLEMENT HOTELS</p>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
		<a href="index.php"><button type="button" class="btn btn-outline-secondary btn-lg">Learn More</button></a>
	</div>
</div>
</div>

<!--- Welcome Section -->
<div class="container-fluid padding">
<div class="row welcome text-center">
	<div class="col-12">
		<h1 class="display-4">Report.</h1>
	</div>
	<hr>
	<div class="col-12">
		<p class = "lead">Are you interested in finding a specific record?
		The report functionality below allows you to query the database 
		using the specified value.</p>
	</div>
	<div class="col-12">
		<p class = "display-4">Email</p>
		<form class="contact-form" method="post" action="report.php" align="center">
		<input height="45px" name = "valueToSearch" type="text" class="form-control" placeholder="Value To Search" required><br/>
		<input height="45px" type="submit" name="search" class="form-control submit" value="Filter">
		
		<table>
			<tr>
				<th>Check In</th>
				<th>Check Out</th>
				<th>Adults</th>
				<th>Children</th>
				<th>Rooms</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Id Number</th>
				<th>Phone</th>
				<th>Email</th>
				<th>Nationality</th>
			</tr>
			<?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['cdate'];?></td>
                    <td><?php echo $row['odate'];?></td>
                    <td><?php echo $row['adults'];?></td>
                    <td><?php echo $row['children'];?></td>
					<td><?php echo $row['rooms'];?></td>
					<td><?php echo $row['fname'];?></td>
					<td><?php echo $row['lname'];?></td>
					<td><?php echo $row['idnum'];?></td>
					<td><?php echo $row['phone'];?></td>
					<td><?php echo $row['email'];?></td>
					<td><?php echo $row['nationality'];?></td>
                </tr>
            <?php endwhile;?>
		</table>
		</form>
	</div>
	
</div>
</div>

<!--- Footer -->
<footer>
<div class="container-fluid padding">
<div class="row text-center">
	<div class="col-md-6">
		<img src = "img/logo.png" height = "60" width = "60">
		<p> </p>
		<h5>CLEMENT HOTELS</h5>
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