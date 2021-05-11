<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Tourism Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="csss/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="csss/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="csss/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="csss/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="csss/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="csss/owl.carousel.min.css">
	<link rel="stylesheet" href="csss/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="csss/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="csss/fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="csss/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
</head>
<body>
<?php include('includes/header.php');?>
<div class="banner">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">Explore our most tavel agency</h1>
	</div>
</div>


<div class="colorlib-tour colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Popular Destination</h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
			</div>
			<div class="tour-wrap">
				<a href="package-details.php?pkgid=7" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/tour-1.jpg);">
					</div>
					<span class="desc">
						<h2>Rani ki Vav</h2>
						<span class="city">Patan,Gujarat</span>
						<span class="price">Rs. 2400</span>
					</span>
				</a>
				<a href="package-details.php?pkgid=8" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/tour-2.jpg);">
					</div>
					<span class="desc">
						<h2>GOA</h2>
						<span class="city">Goa,India</span>
						<span class="price">Rs. 12000</span>
					</span>
				</a>
				<a href="package-details.php?pkgid=9" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/tour-3.jpg);">
					</div>
					<span class="desc">
						<h2>Daarjeeling</h2>
						<span class="city">West Bengal</span>
						<span class="price">Rs. 8750</span>
					</span>
				</a>
				<a href="package-details.php?pkgid=10" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/tour-4.jpg);">
					</div>
					<span class="desc">
						<h2>Lotus Temple</h2>
						<span class="city">Delhi</span>
						<span class="price">Rs. 1750</span>
					</span>
				</a>
				<a href="package-details.php?pkgid=15" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/tour-5.jpg);">
					</div>
					<span class="desc">
						<h2>Munnar</h2>
						<span class="city">Kerala</span>
						<span class="price">Rs. 10000</span>
					</span>
				</a>
				<a href="package-details.php?pkgid=11" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/tour-6.jpg);">
					</div>
					<span class="desc">
						<h2>Solang Valley</h2>
						<span class="city">Manali,H.P</span>
						<span class="price">Rs. 24500</span>
					</span>
				</a>
				<a href="package-details.php?pkgid=12" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/tour-7.jpg);">
					</div>
					<span class="desc">
						<h2>Hawa Mahal</h2>
						<span class="city">Jaipur</span>
						<span class="price">Rs. 3500</span>
					</span>
				</a>
				<a href="package-details.php?pkgid=13" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/tour-8.jpg);">
					</div>
					<span class="desc">
						<h2>Jolly Bouy Island</h2>
						<span class="city">Andaman and Nicobar Island</span>
						<span class="price">Rs. 30000</span>
					</span>
				</a>
			</div>
		</div>

		<div id="colorlib-intro" class="intro-img" style="background-image: url(images/cover-img-1.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 animate-box">
						<div class="intro-desc">
							<div class="text-salebox">
								<div class="text-rights">
									<h3 class="title">Incredible India</h3>
									<p>One of the oldest civilisations in the world, India is a mosaic of multicultural experiences. With a rich heritage and myriad attractions, the country is among the most popular tourist destinations in the world. It covers an area of 32, 87,263 sq. km, extending from the snow-covered Himalayan heights to the tropical rain forests of the south. As the 7th largest country in the world, India stands apart from the rest of Asia, marked off as it is by mountains and the sea, which give the country a distinct geographical entity.</p>
									<p><a href="package-details.php?pkgid=14" class="btn btn-primary">Book Now</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="video-wrap">
							<div class="video colorlib-video" style="background-image: url(images/video-backgroud.jpg);">
								<a href="https://www.youtube.com/watch?v=2JH2s8GgxHg" class="popup-vimeo"><i class="icon-video"></i></a>
								<div class="video-overlay"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



		<div class="colorlib-tour">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Most Popular Travel Cities</h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="f-tour">
							<div class="row row-pb-md">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6 animate-box">
											<a  href="package-list.php" class="f-tour-img" style="background-image: url(images/mpc-1.jpg);">
												<div class="desc">
													<h3>Mysore - 3 Days</h3>
													<p class="price"><span>3000</span> <small>/ person</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  href="package-list.php" class="f-tour-img" style="background-image: url(images/mpc-2.jpg);">
												<div class="desc">
													<h3>Mumbai - 3 Days</h3>
													<p class="price"><span>5000</span> <small>/ person</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  href="package-list.php" class="f-tour-img" style="background-image: url(images/mpc-3.jpg);">
												<div class="desc">
													<h3>Agra- 3 Days</h3>
													<p class="price"><span>7500</span> <small>/ person</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  href="package-list.php" class="f-tour-img" style="background-image: url(images/mpc-4.jpg);">
												<div class="desc">
													<h3>Manipur - 7 Days</h3>
													<p class="price"><span>10000</span> <small>/ person</small></p>
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="desc">
										<div class="row">
											<div class="col-md-12">
												<h3></h3>
												<p><br><br></p><br>
											</div>
											<div class="col-md-12">
												<h4>Best Tours City</h4>
												<div class="row">
													<div class="col-md-4 col-sm-4 col-xs-4">
														<ul>
															<li><a href="package-list.php">Delhi</a></li>
															<li><a href="package-list.php">Mumbai</a></li>
															<li><a href="package-list.php">Manali</a></li>
															<li><a href="package-list.php">Kolkata</a></li>
														</ul>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-4">
														<ul>
															<li><a href="package-list.php">Mysore</a></li>
															<li><a href="package-list.php">Kerala</a></li>
															<li><a href="package-list.php">Bodhgaya</a></li>
															<li><a href="package-list.php">Kashmir</a></li>
														</ul>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-4">
														<ul>
															<li><a href="package-list.php">Jaipur</a></li>
															<li><a href="package-list.php">Hampi</a></li>
															<li><a href="package-list.php">Goa</a></li>
															<li><a href="package-list.php">Gujarat</a></li>
														</ul>
													</div>
												</div>
												<p><a href="package-list.php" class="btn btn-primary">View All Places</a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>			
<!-- //write us -->
</body>
</html>