
<!--- /top-header ---->
<!--- header ---->
<div class="header">
	<div class="container">
		<div class="logo wow fadeInDown animated">
			<a href="index.php">Karma T&T</a>	
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /header ---->
<!--- footer-btm ---->
<div class="footer-btm wow fadeInLeft animated">
	<div class="container">
	<div class="navigation">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-1">
						<ul class="nav navbar-nav">
							<li><a href="index.php">Home</a></li>
							<li><a href="page.php?type=aboutus">About</a></li>
								<li><a href="package-list.php">Tour Packages</a></li>
								<li><a href="page.php?type=contact">Contact Us</a></li>
								<li><a href="enquiry.php">Enquiry</a></li>
								<?php if($_SESSION['login'])
								{?>
								<li><a href="tour-history.php">My-booking</a></li>
								
								<li style="color:#FFDD00">--------------------------------------</li>
								<li class="sig" style="margin-right: 15px"> <a href="#"><?php echo htmlentities($_SESSION['login']);?></a></li> 
								<li class="sigi" style="margin-right: 15px"><a href="logout.php" >/Logout</a></li>
								<?php } else { ?>
									<li style="color:#FFDD00">---------------------------------------------------</li>
									<li class="sig" style="margin-right: 15px"><a href="#" data-toggle="modal" data-target="#myModal" >Sign Up</a></li> 
									<li class="sigi" style="margin-right: 15px"><a href="#" data-toggle="modal" data-target="#myModal4" >/Sign In</a></li>
									<li><a href="admin/index.php">Admin</a></li>
								<?php } ?>
								<div class="clearfix"></div>

						</ul>
					</nav>
				</div>	
			</nav>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>