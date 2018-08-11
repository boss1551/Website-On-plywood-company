<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="shortcut icon" href="images/logo1.jpg" />
<!-- bootstrap-css -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- font -->
	<link href="//fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Dosis:300,400,500,600" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">

</head>
<body>
<!--Header-->
<div class="header">
		<div class="bottom-header">
			<div class="container">
				<div class="logo">
					<h1><a href="index.html"><img src="images/logo1.jpg" alt="" /></a></h1>
				</div>
				<div class="top-nav wow">
					<nav class="navbar navbar-default">
						<div class="container">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="index.php" class="active">Home</a></li>
								<li><a href="about.php">About</a></li>
				
								<li><a href="gallery.php">Gallery</a></li>
									    
								<li><a href="product.php">Product</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="login.php">Login/Signup</a></li>
							</ul>	
							<div class="clearfix"> </div>
						</div>	
					</nav>		
				</div>
			</div>
		</div>
	</div>
	<!--Header End-->	

	<!-- login start-->

	<!-- <div class="about"> -->
		<div class="about-heading">
			<div class="container">
				<div class="contact-form">
					<h2 class="wow fadeInDown animated" data-wow-delay=".5s">User Login</h2><br>
					<form action="login.php" method="post" >
						<input type="email" placeholder="Enter Email" required=""><br><br>
						<input type="password" placeholder="password" required=""><br>
						<button class="btn1 btn-1 btn-1b">Submit</button>
						<div class="forgot-top-grids">
							<div class="forgot-grid">
								<ul>
									<li>
										<input type="checkbox" id="brand1" value="">
										<label for="brand1"><span></span>Remember me</label>
									</li>
								</ul>
							</div>
							<div class="forgot">
								<a href="signup.php">Forgot password?</a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<h5><p>Don't have an account??<a href="signup.php" style="text-decoration: none;"> Click here!!</a></p></h5>
					</form>
				</div>
			</div>
		</div>
		<!-- <div class="about-top agileits">
			<div class="container">
				<div class="about-bottom ">
				</div>
			</div>
		</div>
	</div> -->	
<!-- footer -->
	<div class="footer agileits">
		<div class="container">
			<div class="footer-grids w3l-agile">
				<div class="col-md-3 footer-nav">
					<h4>Quick Links</h4>
					<ul>
						<li><a href="about.php">About</a></li>
						<li><a href="gallery.php">Gallery</a></li>
						<li><a href="product.php">Product</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-5 footer-nav agile-w3layouts wow fadeInUp animated" data-wow-delay=".5s">
					
				</div>
				<div class="col-md-4 footer-nav">
					<h4>Follow Us On</h4>
					<div class="news-grids">
						<div class="news-grid">
							<h6><i class="fa fa-facebook-square" aria-hidden="true"></i><a href="https://www.facebook.com">&nbsp;&nbsp;&nbsp;&nbsp;facebook</a></h6>
							<h6><i class="fa fa-twitter-square" aria-hidden="true"></i><a href="https://www.twitter.com">&nbsp;&nbsp;&nbsp;&nbsp;Twitter</a></h6>
							<h6><i class="fa fa-instagram" aria-hidden="true"></i><a href="https://www.instagram.com">&nbsp;&nbsp;&nbsp;&nbsp;Instagram</a></h6>
							<h6><i class="fa fa-google-plus-square" aria-hidden="true"></i><a href="https://plus.google.com">&nbsp;&nbsp;&nbsp;&nbsp;Google+</a></h6>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="copyright">
				<p> Copywrite @ 2017. All Rights Reserved . Design by Yogesh_Prajapati</p>
			</div>
		</div>
	</div>
	<!-- //footer -->
</body>
</html>