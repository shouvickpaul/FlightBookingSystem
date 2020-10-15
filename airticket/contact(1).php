<!DOCTYPE html>
<html>
<head>
  <title>airbaba</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://kit.fontawesome.com/6997ffd67f.js" crossorigin="anonymous"></script>
  <style >
    #form_style{
        text-align: center;
        padding-top: 30px;
      }
  </style>
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
        <li><a href="book_tickets.php"><i class="fa fa-ticket" aria-hidden="true"></i> <text>Book Tickets</text></a></li>
        <li><a href="about.php"><i class="fa fa-plane" aria-hidden="true"></i><text> About Us</text></a></li>
        <li><a href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i> <text>Contact Us</text></a></li>
        <li><a href="login_page.php"><i class="fa fa-sign-in" aria-hidden="true"></i> <text>Login</a></text></li>
      </ul>
    </nav>
  </header>
  

<div id="form" align="center">
                <form method="post" action="process.php">
                    <p>
                    <label for="name">Name:</label>
                    <input type="text" name="name" placeholder="Your Name" required>
                    </p> 
                    <p>
                    <label for="name">Email:</label>
                    <input type="text" name="email" placeholder="Your Mail Id" required>
                    </p>
                    <p>
                    <label for="name">Subject:</label>
                    <input type="text" name="subject" placeholder="Subject of the Mail" required>
                    </p>
                    <p>
                    <label for="name"></label>
                    <textarea name="message" id="message" cols="30" rows="10" required></textarea>
                    </p>
                    <p>
                    <input type="submit" id="submit" name="submit" value="Send Message">
                    </p>
                </form>
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
 
        <p class="footer-company-name">© 2020 airbaba flight Solutions Pvt. Ltd.</p>
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