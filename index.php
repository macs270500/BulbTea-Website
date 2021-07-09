<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bulb-T shop</title>
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

      <div class="languages d-none d-md-flex align-items-center">
        <ul>
          <?php
          if(isset($_SESSION['username'])){
            echo'<li>'.$_SESSION['username'].'</li>';
          }
          ?>
          <!--<li>En</li>-->
          <!--<li><a href="#">De</a></li>-->
        </ul>
      </div>
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
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#events">Events</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#chefs">Chefs</a></li>          
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
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <?php
          if(isset($_SESSION['username'])){
          echo'<li><a class="nav-link scrollto" href="shopping cart.php">Cart</a></li>';
          }
          ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <?php
      if(isset($_SESSION['username'])){
        echo"<a id='sign-in-out' href='forms/logout.php' class='book-a-table-btn scrollto d-none d-lg-flex'>Sign-out</a>";
      }else{
        echo"<a id='sign-in-out' href='inner-page.php' class='book-a-table-btn scrollto d-none d-lg-flex'>Sign-in</a>";
      }
      ?>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>Bulb-T</span></h1>
          <h2>Delivering great Tea for more than 3 years!</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
            <!--<a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Book a Table</a>-->
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.facebook.com/plugins/video.php?height=308&href=https%3A%2F%2Fwww.facebook.com%2Fbulbteamauritius1999%2Fvideos%2F396304904315426%2F&show_text=false&width=560&t=0" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="products/assets/items/vanilla.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>What is BulbTea made of?</h3>
            <p class="fst-italic" style="text-align: justify;">
              Bubble milk tea is typically made with a base of black tea, green tea, oolong tea, or white tea, then combined with milk and sweetener. It’s also known for containing large tapioca pearls, but it can be made without them if requested. Part of the fun of bubble tea is the ability to customize the drink with different teas, flavors, and toppings. Bubble tea menus usually contain these three types of flavors:
            </p>
            <ul style="text-align: justify;">
              <li><i class="bi bi-check-circle"></i> Milk Tea - Teas, fruit flavors, or herbal flavors combined with sweetened milk for a creamy beverage (almond milk tea, honey milk tea, strawberry milk tea)</li>
              <li><i class="bi bi-check-circle"></i> Flavored Tea - Sweetened teas with added flavorings but no milk (jasmine green tea, honey black tea)</li>
              <li><i class="bi bi-check-circle"></i> Juice - Fruit juices with no milk (passion fruit, mango, kiwi)</li>
            </ul>
            <!--<p>
              Bubble Tea originated in Taiwan in the early 1980's at a small tea stand. Elementary school children would look forward to buying a cup of refreshing tea after a long, hard day of work and play. Tea stands were set up in front of the schools and would compete for business with the best selling tea. One concession owner became popular with her tea when she started adding different fruit flavoring to her tea. Because of the sweet and cool taste, children loved the taste. Soon, other concessions heard about the "unique" and popular tea, so they started to add flavoring to their teas. When adding flavor, the tea and flavoring needed to be shaken well for a good all around taste. This formed bubbles in the drink, which came to be known as "Bubble Tea."
            </p>-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Why Us</h2>
          <p>Why Choose Our Outlets</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>01</span>
              <h4>Professional  Boba Baristas</h4>
              <p>All of our beverages are prepared by professional baristas, trained to bring out the best of the tea leaves</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>02</span>
              <h4>Better Beverage Quality</h4>
              <p>All of our products are carefully chosen and inspected by the baristas to ensure that they are perfect</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>03</span>
              <h4>Delivery Service</h4>
              <p>We also have a dedicated delivery service to allow our customer to enjoy a great tea anywhere</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <?php
      include 'forms/connection.php';
    ?>
    <?php
      include "forms/items.php";
    ?>
   <!-- <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Check Our Tasty Menu</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-starters">Fruit Tea</li>
              <li data-filter=".filter-salads">Milk Tea</li>
              <li data-filter=".filter-specialty">Specials</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Lobster Bisque</a><span>$5.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/bread-barrel.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Bread Barrel</a><span>$6.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/cake.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Crab Cake</a><span>$7.95</span>
            </div>
            <div class="menu-ingredients">
              A delicate crab cake served on a toasted roll with lettuce and tartar sauce
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/caesar.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Caesar Selections</a><span>$8.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/tuscan-grilled.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Tuscan Grilled</a><span>$9.95</span>
            </div>
            <div class="menu-ingredients">
              Grilled chicken with provolone, artichoke hearts, and roasted red pesto
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/mozzarella.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Mozzarella Stick</a><span>$4.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/greek-salad.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Greek Salad</a><span>$9.95</span>
            </div>
            <div class="menu-ingredients">
              Fresh spinach, crisp romaine, tomatoes, and Greek olives
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/spinach-salad.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Spinach Salad</a><span>$9.95</span>
            </div>
            <div class="menu-ingredients">
              Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/lobster-roll.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Lobster Roll</a><span>$12.95</span>
            </div>
            <div class="menu-ingredients">
              Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
            </div>
          </div>

        </div>

      </div>
    </section>-->
    <!-- End Menu Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Events</h2>
          <p>Organize Your Events with our Teahouse</p>
        </div>

        <div class="events-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Birthday Parties</h3>
                  <div class="price">
                    <p><span>Rs 15,000</span></p>
                  </div>
                  <!--<p class="fst-italic">-->
                  <!--  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore-->
                  <!--  magna aliqua.-->
                  <!--</p>-->
                  <!--<ul>-->
                  <!--  <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>-->
                  <!--  <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>-->
                  <!--  <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>-->
                  <!--</ul>-->
                  <p style="text-align: justify;">
                    Organize a Birthday Party that will impress the birthday boy/girl the whole guests shall thank you for!
                    Whether you choose a party in winter or in summer, BulbTea’s drinks will refresh the mind and the soul.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-private.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Private Parties</h3>
                  <div class="price">
                    <p><span>Rs 20,000</span></p>
                  </div>
                  <!--<p class="fst-italic">-->
                  <!--  -->
                  <!--</p>-->
                  <!--<ul>-->
                  <!--  <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>-->
                  <!--  <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>-->
                  <!--  <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>-->
                  <!--</ul>-->
                  <p style="text-align: justify;">
                    When was the last time you organised a par-TEA with your colleagues/friends/mates? BulbTea is here to offer you that special moment where we guarantee you through the first sip of our drinks, you gonna feel tons of fun. How can a host foster a private party without our refreshing drinks afterall.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-custom.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Custom Parties</h3>
                  <div class="price">
                    <p><span>Rs 10,000</span></p>
                  </div>
                  <!--<p class="fst-italic">-->
                  <!--  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore-->
                  <!--  magna aliqua.-->
                  <!--</p>-->
                  <!--<ul>-->
                  <!--  <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>-->
                  <!--  <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>-->
                  <!--  <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>-->
                  <!--</ul>-->
                  <p style="text-align: justify;">
                    We are here to offer you the service where parties may be organised according to your requirements. BulbTea is here to bring out boredom in any type of parties where special games are being organised according to the theme. Our TeaHouse also provides you all with a tea tasting the selection of the fruit tea or milk tea flavours you chose.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Sign-up Section ======= -->
<!--    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Sign-up</h2>
          <p>Register</p>
        </div>

        <form action="forms/register.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="surname" class="form-control" id="surname" placeholder="Your Surname" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="username" id="username" placeholder="Your Username" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="password" class="form-control" name="password" id="password" placeholder="Your Password" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
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
    </section>-->
    <!-- End Sign-up Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What they're saying about us</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Excellent! Absolutely scrumptious. The staff were extremely helpful and friendly. I would definitely recommend to anyone looking for a something delicious to cool down.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Love the fruity section.. My kids always want to have one while passing by.. Great service..
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Best bubble tea drinks in Mauritius, should definitely check this place out. The staff are soo friendly. You will not be disappointed. Personal preference : Chocolate Mousse + Coffee Jelly topping. 🌟🌟🌟🌟🌟
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  New in the area. One of the best Bubble Tea I've tasted. The staff are very friendly, if you have never tasted or try this drink before just ask to waiter/cashier's recommendations. I have not give 5 stars only before of the location, i would like that it was more on the main street as the actual environment is not to my liking...there was even a fight in this street the afternoon I was there.
Even that I will visite them again and would suggest you to do same because their products are BOMB!!!!!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Finally a real, genuine, bubble Tea outlet in Mauritius. Chatime Franchise is by far one of the best around the globe. Taste is genuinely and exactly the same as in Taiwan. Lot of choices. Prices 100% affordable. Often launches promotion and also has limited editions every 3 months. Staffs are dynamic, friendly and very smiling. 10/10 customer service. Strongly recommend. Looking forward for more stores around our little island :)
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Some photos from Our Teahouses</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Baristas</h2>
          <p>Our Professional Boba Baristas</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Head Barista</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Junior Barista</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>Junior Barista</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Find Us</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <div class="row g-0">
        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="zoom-in" data-aos-delay="300">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3745.4121038289704!2d57.509565014918195!3d-20.158559886476134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x217c51b7a931d721%3A0x5bd3dd571aa5c52b!2sBulb%20Tea%20Port-Louis!5e0!3m2!1sen!2smu!4v1623943475053!5m2!1sen!2smu" frameborder="0" allowfullscreen></iframe>     
          </div>
        </div>
          
        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="zoom-in" data-aos-delay="300">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7483.451034015783!2d57.51804183882567!3d-20.311625457469088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf30243ed6c0581eb!2sBulb%20Tea%20Curepipe!5e0!3m2!1sen!2smu!4v1623943715869!5m2!1sen!2smu" frameborder="0" allowfullscreen></iframe>       
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="zoom-in" data-aos-delay="300">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59852.29079838788!2d57.526767382025696!3d-20.351193510419883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x217c6130f7917d15%3A0x3f119d1188931f65!2sBulb%20Tea!5e0!3m2!1sen!2smu!4v1623943735699!5m2!1sen!2smu"  frameborder="0" allowfullscreen></iframe>      
          </div>
        </div>        
      </div>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>|MU, Madras St, Port Louis 11611|</p>
                <p>|Royal Road, Curepipe Curepipe MU, 74418|</p>
                <p>|Royal Road, Rose Belle|</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>
                  Monday-Saturday:<br>
                  10:00 AM - 20:00 PM
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>bulbtea09@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+230 576 308 34</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
            <?php include 'sendemail.php'; ?>
            <form action="" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="contactName" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="contactEmail" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
              </div>
              <!--<div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>-->
              <div class="text-center"><button type="submit" name="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
    <!-- ======= Specials Section ======= -->
     <?php
    //if(isset($_SESSION['username'])){
    //  echo'    
    //<section id="cart" class="specials">
    //  <div class="container" data-aos="fade-up">
    //
    //    <div class="section-title">
    //      <h2>Cart</h2>
    //      <p>View Shopping Cart</p>
    //    </div>
    //
    //    <div class="row" data-aos="fade-up" data-aos-delay="100">
    //      <div class="col-lg-3">
    //        <ul class="nav nav-tabs flex-column">
    //          <li class="nav-item">
    //            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Modi sit est</a>
    //          </li>
    //          <li class="nav-item">
    //            <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Unde praesentium sed</a>
    //          </li>
    //          <li class="nav-item">
    //            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Pariatur explicabo vel</a>
    //          </li>
    //          <li class="nav-item">
    //            <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Nostrum qui quasi</a>
    //          </li>
    //          <li class="nav-item">
    //            <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Iusto ut expedita aut</a>
    //          </li>
    //        </ul>
    //      </div>
    //      <div class="col-lg-9 mt-4 mt-lg-0">
    //        <div class="tab-content">
    //          <div class="tab-pane active show" id="tab-1">
    //            <div class="row">
    //              <div class="col-lg-8 details order-2 order-lg-1">
    //                <h3>Architecto ut aperiam autem id</h3>
    //                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
    //                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
    //              </div>
    //              <div class="col-lg-4 text-center order-1 order-lg-2">
    //                <img src="assets/img/specials-1.png" alt="" class="img-fluid">
    //              </div>
    //            </div>
    //          </div>
    //          <div class="tab-pane" id="tab-2">
    //            <div class="row">
    //              <div class="col-lg-8 details order-2 order-lg-1">
    //                <h3>Et blanditiis nemo veritatis excepturi</h3>
    //                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
    //                <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
    //              </div>
    //              <div class="col-lg-4 text-center order-1 order-lg-2">
    //                <img src="assets/img/specials-2.png" alt="" class="img-fluid">
    //              </div>
    //            </div>
    //          </div>
    //          <div class="tab-pane" id="tab-3">
    //            <div class="row">
    //              <div class="col-lg-8 details order-2 order-lg-1">
    //                <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
    //                <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
    //                <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
    //              </div>
    //              <div class="col-lg-4 text-center order-1 order-lg-2">
    //                <img src="assets/img/specials-3.png" alt="" class="img-fluid">
    //              </div>
    //            </div>
    //          </div>
    //          <div class="tab-pane" id="tab-4">
    //            <div class="row">
    //              <div class="col-lg-8 details order-2 order-lg-1">
    //                <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
    //                <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
    //                <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
    //              </div>
    //              <div class="col-lg-4 text-center order-1 order-lg-2">
    //                <img src="assets/img/specials-4.png" alt="" class="img-fluid">
    //              </div>
    //            </div>
    //          </div>
    //          <div class="tab-pane" id="tab-5">
    //            <div class="row">
    //              <div class="col-lg-8 details order-2 order-lg-1">
    //                <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
    //                <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
    //                <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
    //              </div>
    //              <div class="col-lg-4 text-center order-1 order-lg-2">
    //                <img src="assets/img/specials-5.png" alt="" class="img-fluid">
    //              </div>
    //            </div>
    //          </div>
    //        </div>
    //      </div>
    //    </div>
    //
    //  </div>
    //</section>';
    //}
    ?>
    <!-- End Specials Section -->

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
              <?php
                if(isset($_SESSION['username'])){
                echo'<li><i class="bx bx-chevron-right"></i><a href="shopping cart.php">Cart</a></li>';
                }
              ?>
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