



<?php
	session_start();
?>
<html>
	<head>
		<title>
			Ticket Booking Successful
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 127px
			}
			#form_style{
				text-align: center;
				padding-left: 50px;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
<header>
		<div id="logo-and-co-name">
			<img class="logo" src="images/logo.jpg"/> 
			<h1 id="title">
				airbaba
			</h1>
		</div>
		<nav>
			<ul>
				<li><a href="customer_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="about.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</nav>
</header>
<div id="form_style">
		<?php

    if(isset($_POST['submit'])){
      $to = "saikatnandikhan@gmail.com";
      $subject = $_POST['subject'];
      $email = $_POST['email'];
      $txt = $_POST['message'];
      $headers = "From: {$email}";
      mail($to,$subject,$txt,$headers);
      
	echo "<h2>Your message has been sent successfully</h2>";
    }



?>
</div>
		
		<footer class="footer-distributed">
 
			<div class="footer-left">
          <img src="images/logo.jpg" class="logo">
				<h3>About<span>airbaba</span></h3>
 
				<p class="footer-links">
					<a href="#">Home</a>
					|
					<a href="#">Book Ticket</a>
					|
					<a href="#">About</a>
					|
					<a href="#">Contact</a>
				</p>
 
				<p class="footer-company-name">© 2020 Airbaba flight Solutions Pvt. Ltd.</p>
			</div>
 
			<div class="footer-center">
				<div>
					<i class="fa fa-map-marker"></i>
					  <p><span>309 - Rupa Solitaire,
						 Bldg. No. A - 1, Sector - 1</span>
						Mahape, Navi Mumbai - 400710</p>
				</div>
 
				<div>
					<i class="fa fa-phone"></i>
					<p>+91 9876543210</p>
				</div>
				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@airbaba.com">support@airbaba.com</a></p>
				</div>
			</div>
			<div class="footer-right">
				<p class="footer-company-about">
					<span>About airbaba</span>
					We offer  world's best comfortable journey in air at an affordable price and also providing the best offers on international flight bookings.</p>
				<div class="footer-icons">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-youtube"></i></a>
				</div>
			</div>
	</footer>
	</body>
</html>