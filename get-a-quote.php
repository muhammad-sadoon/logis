<?php 
include("connection.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Get A Quote - Logis Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="get-a-quote-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="http://localhost/logis-new-1.0.0/index.php" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">Logis</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="http://localhost/logis-new-1.0.0/index.php">Home<br></a></li>
          <li><a href="http://localhost/logis-new-1.0.0/about.php">About</a></li>
          <li><a href="http://localhost/logis-new-1.0.0/services.php">Services</a></li>
          <li><a href="http://localhost/logis-new-1.0.0/pricing.php">Pricing</a></li>
         
          <li><a href="http://localhost/logis-new-1.0.0/contact.php">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="http://localhost/logis-new-1.0.0/get-a-quote.php">Get a Quote</a>

    </div>
  </header>

  <main class="main">
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
      <div class="container position-relative">
        <h1>Get a Quote</h1>
        <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Get A Quote</li>
          </ol>
        </nav>
      </div>
    </div>
    <section id="get-a-quote" class="get-a-quote section">

      <div class="container">

        <div class="row g-0" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-5 quote-bg" style="background-image: url(assets/img/quote-bg.jpg);"></div>

          <div class="col-lg-7">
            <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" class="php-email-form">
              <h3>Get a quote</h3>
              <p>Vel nobis odio laboriosam et hic voluptatem. Inventore vitae totam. Rerum repellendus enim linead sero park flows.</p>

              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="departure" class="form-control" placeholder="City of Departure" required="">
                </div>

                <div class="col-md-6">
                  <input type="text" name="delivery" class="form-control" placeholder="Delivery City" required="">
                </div>

                <div class="col-md-6">
                  <input type="text" name="weight" class="form-control" placeholder="Total Weight (kg)" required="">
                </div>

                <div class="col-md-6">
                  <input type="text" name="dimensions" class="form-control" placeholder="Dimensions (cm)" required="">
                </div>

                <div class="col-lg-12">
                  <h4>Your Personal Details</h4>
                </div>

                <div class="col-12">
                  <input type="text" name="name" class="form-control" placeholder="Name" required="">
                </div>

                <div class="col-12 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required="">
                </div>

                <div class="col-12">
                  <input type="text" class="form-control" name="phone" placeholder="Phone" required="">
                </div>

                <div class="col-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>
                  <button type="submit" name="btn">Get a quote</button>
                </div>

              </div>
            </form>
           
          </div>

        </div>

      </div>

    </section>

  </main>
  <?php
    include "connection.php";
    if(isset($_POST["btn"])){
    $departure = isset($_POST["departure"]) ? mysqli_real_escape_string($connect, $_POST["departure"]) : '';
    $delivery = isset($_POST["delivery"]) ? mysqli_real_escape_string($connect, $_POST["delivery"]) : '';
    $weight = isset($_POST["weight"]) ? mysqli_real_escape_string($connect, $_POST["weight"]) : '';
    $dimensions = isset($_POST["dimensions"]) ? mysqli_real_escape_string($connect, $_POST["dimensions"]) : '';
    $name = isset($_POST["name"]) ? mysqli_real_escape_string($connect, $_POST["name"]) : '';
    $email = isset($_POST["email"]) ? mysqli_real_escape_string($connect, $_POST["email"]) : '';
    $phone = isset($_POST["phone"]) ? mysqli_real_escape_string($connect, $_POST["phone"]) : '';
    $message = isset($_POST["message"]) ? mysqli_real_escape_string($connect, $_POST["message"]) : '';
    $sql = "INSERT INTO `get-a-quote`(`dcity`, `city`, `weight`, `dimension`, `name`, `email`, `phone`, `massage`) VALUES ('$departure','$delivery','$weight','$dimensions','$name','$email','$phone','$message')";
    $connected = mysqli_query($connect, $sql);
    if($connected == true){
        echo "connect";
    }else{
      echo "not connect";
    }    
    }
  ?>
  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Logis</span>
          </a>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href="https://web.facebook.com/profile.php?id=100082531821261"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/muhammad-sadoon"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/in/muhammad-sadoon-99649a335/"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About us</a></li>
            <li><a href="service.html">Services</a></li>
            <li><a href="service-details.html">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="service-details.php">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>Career Boosting Acadmey</p>
          <p>Naval Colony Karachi</p>
          <p>Pakistan</p>
          <p class="mt-4"><strong>Phone:</strong> <span>+92 345 4131372</span></p>
          <p><strong>Email:</strong> <span>sadoonmuhammad8@gmail.com</span></p>
        </div>

      </div>
    </div>
  </footer>
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>