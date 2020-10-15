<!DOCTYPE html>

<html>
<head>
	<title>airbaba</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://kit.fontawesome.com/6997ffd67f.js" crossorigin="anonymous"></script>
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
				<li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i><text> Home</text></a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"book_tickets.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_ticket_message.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
					?>
				</li>
				<li><a href="about.php"><i class="fa fa-plane" aria-hidden="true"></i><text> About Us</text></a></li>
				<li><a href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i> <text>Contact Us</text></a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"logout_handler.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"logout_handler.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
					?>
				</li>
			</ul>
		</nav>
	</header>
	<div class="container">
		<div class="welcome_text">Hi, Welcome to airbaba</div>
		<!--img src="images/bgimg.jpg" width=100%-->

		<div class="slideshow-container">
			<div class="mySlides">
			  <img src="img/a.jpg">
			</div>
			<div class="mySlides">
			  <img src="img/b.jpg">
			</div>
			<div class="mySlides">
			  <img src="img/c.jpg">
			</div>
			<div class="mySlides">
			  <img src="img/d.jpg" >
			</div>
			<div class="mySlides">
			  <img src="img/e.jpg">
			</div>
			<div class="mySlides">
			  <img src="img/f.jpg">
			</div>
		</div>
		<br>
		<div style="text-align:center">
		  <span class="dot">1</span> 
		  <span class="dot">2</span> 
		  <span class="dot">3</span>
		  <span class="dot">4</span> 
		  <span class="dot">5</span> 
		  <span class="dot">6</span>  
		</div>

		<script>
			var slideIndex = 0;
			showSlides();

			function showSlides() {
			  var i;
			  var slides = document.getElementsByClassName("mySlides");
			  var dots = document.getElementsByClassName("dot");
			  for (i = 0; i < slides.length; i++) {
			    slides[i].style.display = "none";  
			  }
			  slideIndex++;
			  if (slideIndex > slides.length) {slideIndex = 1}    
			  for (i = 0; i < dots.length; i++) {
			    dots[i].className = dots[i].className.replace(" active", "");
			  }
			  slides[slideIndex-1].style.display = "block";  
			  dots[slideIndex-1].className += " active";
			  setTimeout(showSlides, 2000); // Change image every 2 seconds
			}
		</script>
		<div class="offers">
			<table align="center">
			    <tr>
		    	    <td style="padding:15px">
		        	    <img src="images/taj.jpg">
		   				<figcaption>
							<h3><b>
                            <?php
                                if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
                                {
                                    echo "<a href=\"book_tickets.php\">&nbsp;Agra&nbsp; 20% off &nbsp; &nbsp; Book Now >></a>";
                                }
                                else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
                                {
                                    echo "<a href=\"admin_homepage.php\">&nbsp;Agra&nbsp; 20% off &nbsp; &nbsp; Book Now >></a>";
                                }
                                else
                                {
                                    echo "<a href=\"login_page.php\">&nbsp;Agra&nbsp; 20% off &nbsp; &nbsp; Book Now >></a>";
                                }
					        ?>
                            </b></h3>
						</figcaption>
		      	    </td>
		            <td style="padding:15px">
		            	<img src="images/ny.jpg">
		            	<figcaption>
							<h3><b>
                            <?php
                                if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
                                {
                                    echo "<a href=\"book_tickets.php\">&nbsp;New york&nbsp; 15% off &nbsp; &nbsp; Book Now >></a>";
                                }
                                else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
                                {
                                    echo "<a href=\"admin_homepage.php\">&nbsp;New york&nbsp; 15% off &nbsp; &nbsp; Book Now >></a>";
                                }
                                else
                                {
                                    echo "<a href=\"login_page.php\">&nbsp;New york&nbsp; 15% off &nbsp; &nbsp; Book Now >></a>";
                                }
					        ?>
                            </b></h3>
						</figcaption>
		            </td>
		            <td style="padding: 10px">
		            	<img src="images/eiffel.jpg">
		            	<figcaption>
                        <h3><b>
                            <?php
                                if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
                                {
                                    echo "<a href=\"book_tickets.php\">&nbsp;Paris&nbsp; 10% off &nbsp; &nbsp; Book Now >></a>";
                                }
                                else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
                                {
                                    echo "<a href=\"admin_homepage.php\">&nbsp;Paris&nbsp; 10% off &nbsp; &nbsp; Book Now >></a>";
                                }
                                else
                                {
                                    echo "<a href=\"login_page.php\">&nbsp;Paris&nbsp; 10% off &nbsp; &nbsp; Book Now >></a>";
                                }
					        ?>
						</b></h3>
						</figcaption>
		            </td>
		        </tr>
		    </table>
		</div>
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