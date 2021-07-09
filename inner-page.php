<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bulb-T Sign-In</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/BulbStyleSheet.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Restaurantly - v3.2.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+230 576 308 34</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sat: 10AM - 20PM</span></i>
      </div>

      <!--<div class="languages d-none d-md-flex align-items-center">
        <ul>
          <li>En</li>
          <li><a href="#">De</a></li>
        </ul>
      </div>-->
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">Bulb-T</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/pg-icon.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="index.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
          <li><a class="nav-link scrollto" href="index.php#menu">Menu</a></li>
          <!--<li><a class="nav-link scrollto" href="index.php#specials">Specials</a></li>-->
          <li><a class="nav-link scrollto" href="index.php#events">Events</a></li>
          <li><a class="nav-link scrollto" href="index.php#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="index.php#chefs">Chefs</a></li>          
          <!--<li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>-->
          <!--  <ul>-->
          <!--    <li><a href="#">Drop Down 1</a></li>-->
          <!--    <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>-->
          <!--      <ul>-->
          <!--        <li><a href="#">Deep Drop Down 1</a></li>-->
          <!--        <li><a href="#">Deep Drop Down 2</a></li>-->
          <!--        <li><a href="#">Deep Drop Down 3</a></li>-->
          <!--        <li><a href="#">Deep Drop Down 4</a></li>-->
          <!--        <li><a href="#">Deep Drop Down 5</a></li>-->
          <!--      </ul>-->
          <!--    </li>-->
          <!--    <li><a href="#">Drop Down 2</a></li>-->
          <!--    <li><a href="#">Drop Down 3</a></li>-->
          <!--    <li><a href="#">Drop Down 4</a></li>-->
          <!--  </ul>-->
          <!--</li>-->
          <li><a class="nav-link scrollto" href="index.php#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <!--<a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Book a table</a>-->

    </div>
  </header><!-- End Header -->

  <main id="main">
    <!--<section class="breadcrumbs">-->
    <!--  <div class="container">-->

        <!--<div class="d-flex justify-content-between align-items-center">-->
        <!--  <h2>Inner Page</h2>-->
        <!--  <ol>-->
        <!--    <li><a href="index.html">Home</a></li>-->
        <!--    <li>Inner Page</li>-->
        <!--  </ol>-->
        <!--</div>-->
        
            

    <!--  </div>-->
    <!--</section>-->

    <section class="inner-page">
      <div class="container">
        <!--<p>-->
        <!--  Example inner page template-->
        <!--</p>-->
        <!-- ======= Sign-up Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Sign-in</h2>
          <p>Log-in</p>
        </div>

        <form action="forms/login.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-6 col-md-2 form-group">
              <input type="text" class="form-control" name="username" id="username" placeholder="Your Username" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <!--<div class="validate"></div>-->
            </div>
            <div class="col-lg-6 col-md-2 form-group">
              <input type="password" class="form-control" name="password" id="password" placeholder="Your Password" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <!--<div class="validate"></div>-->
            </div>
          </div>
          <div class="text-center"><button type="submit">Login</button></div>
        </form>
        
        <div class="section-title" id="sign-up">
          <h2>Sign-up</h2>
          <p>Register</p>
        </div>

        <form action="forms/register.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <!--<div class="validate"></div>-->
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="surname" class="form-control" id="surname" placeholder="Your Surname" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <!--<div class="validate"></div>-->
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <!--<div class="validate"></div>-->
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <!--<div class="validate"></div>-->
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="rusername" id="username" placeholder="Your Username" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <!--<div class="validate"></div>-->
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="password" class="form-control" name="rpassword" id="password" placeholder="Your Password" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <!--<div class="validate"></div>-->
            </div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your account was registered successfully</div>
          </div>
          <div class="text-center"><button type="submit">Register</button></div>
        </form>
      </div>
    </section><!-- End Sign-up Section -->
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Bulb-T</h3>
              <p>| MU, Madras St, Port Louis 11611 |</p>
                <p>| Royal Road, Curepipe Curepipe MU, 74418 |</p>
                <p>| Royal Road, Rose Belle |</p>
                <strong>Phone:</strong> +230 576 308 34<br>
                <strong>Email:</strong> bulbtea09@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#menu">Menu</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#specials">Specials</a></li>
            </ul>
          </div>
            
          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#events">Events</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#gallery">Gallery</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#chefs">Chefs</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
            </ul>
          </div>

          <!--<div class="col-lg-5 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>-->

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Bulb-T</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Designed by <a href="">Careem</a> & <a href="">Aashiyah</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>