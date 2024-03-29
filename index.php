<?php
session_start();
include './connection/conn.php';
include './function.php';

if (!isset($_SESSION['name'])) {
    header('location: ./login.php');
    exit();
}
register($con);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <title>GoldenGym</title>
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap"
    rel="stylesheet" />
  <link href="./assets/css/style.css" rel="stylesheet" />
  <link href="./assets/css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
            <img src="./assets/images/logo.png" alt="" />
            <span>
              GoldenGym
            </span>
          </a>
          <div class="contact_nav" id="">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link" href="service.php">
                  <img src="./assets/images/envelope.png" alt="" />
                  <span>GolderGym@gmail.com</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.php">
                  <img src="./assets/images/call.png" alt="" />
                  <span>Call : + 01 1234567890</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.php">
                  <span><?php echo "User : ".$_SESSION['name'] ?></span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>

    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="container">
        <div class="custom_nav2">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex  flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav  ">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php">About </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="service.php">Services </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
      <div class="slider_container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-7 offset-md-6 offset-md-5">
                    <div class="detail-box">
                      <h2>
                        Get Your Body
                      </h2>
                      <h1>
                      Personal Trainer
                      </h1>
                      <p>
                      professionally practice as a Qualified Personal Trainer in the Fitness Industry.
                      </p>
                      <div class="btn-box">
                        <a href="about.php" class="btn-1">
                          Read More
                        </a>
                        <a href="contact.php" class="btn-2">
                          Join Us
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-7 offset-md-6 offset-md-5">
                    <div class="detail-box">
                      <h2>
                        Get Your Body
                      </h2>
                      <h1>
                      Certified Here
                      </h1>
                      <p>
                      Diploma in Personal Training Course is the foundation course in Exercise Science that provides comprehensive theoretical and practical education
                      </p>
                      <div class="btn-box">
                        <a href="" class="btn-1">
                          Read More
                        </a>
                        <a href="contact.php" class="btn-2">
                          Join Us
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-7 offset-md-6 offset-md-5">
                    <div class="detail-box">
                      <h2>
                        Get Your Body
                      </h2>
                      <h1>
                        Fitness Here
                      </h1>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam
                      </p>
                      <div class="btn-box">
                        <a href="" class="btn-1">
                          Read More
                        </a>
                        <a href="contact.php" class="btn-2">
                          Join Us
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>


  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          About GoldenGym
        </h2>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="./assets/images/about-img.png" alt="">
        </div>
        <div class="detail-box">
          <p>
          Golden Gym is a premier fitness center that provides a wide range of fitness and wellness services to individuals of all fitness levels. With its state-of-the-art facilities and experienced trainers, Golden Gym is dedicated to helping its members achieve their health and fitness goals.

At Golden Gym, you will find a well-equipped gymnasium featuring the latest exercise machines, free weights, and cardiovascular equipment. Whether you're looking to build strength, improve cardiovascular endurance, or enhance flexibility, the gym offers a variety of workout options tailored to your specific needs.


          </p>
          <a href="about.php">
            Read More
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end about section -->

  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Services
        </h2>
      </div>
      <div class="service_container">
      <?php
        include './connection/conn.php';
        $query = services($con);
        $counter = 0;
        while ($res = mysqli_fetch_assoc($query)) {
          $activeClass = ($counter == 0) ? 'active' : '';
          ?>
        <div class="box">
         <img src="./<?php echo $res['image']; ?>" alt="">
          <h6 class="visible_heading">
            <?php echo $res['name'] ?>
          </h6>
          <div class="link_box">
            <a href="">
              <img src="./assets/images/link.png" alt="">
            </a>
            <h6>
            <?php echo $res['name'] ?>
            </h6>
          </div>
        </div>   
<?php 
        }
        ?>
        </div>
      </div>
    </div>
  </section>
  <!-- end service section -->
  <!-- Us section -->
  <section class="us_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Why Choose Us
        </h2>
      </div>
      <div class="us_container">
        <div class="box">
          <div class="img-box">
            <img src="./assets/images/u-1.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              QUALITY EQUIPMENT
            </h5>
            <p>
              ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="./assets/images/u-2.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              HEALTHY NUTRITION PLAN
            </h5>
            <p>
              ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="./assets/images/u-3.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              SHOWER SERVICE
            </h5>
            <p>
              ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="./assets/images/u-4.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              UNIQUE TO YOUR NEEDS
            </h5>
            <p>
              ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end us section -->
  <!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          What Says Our Customers
        </h2>
      </div>
      <div id="carouselExample2Indicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExample2Indicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="1"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="2"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
        <div class="carousel-inner">   
        <?php
        include './connection/conn.php';
        $query = customerReview($con);
        $counter = 0;
        while ($res = mysqli_fetch_assoc($query)) {
          $activeClass = ($counter == 0) ? 'active' : '';
          ?>
              <div class="carousel-item <?php echo $activeClass; ?>">
                <div class="box">
                  <div class="img-box">
                    <img src="../<?php echo $res['image']; ?>" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      <?php echo $res['name']; ?>
                    </h5>
                    <p>
                      <?php echo $res['message']; ?>
                    </p>
                  </div>
                </div>
              </div>
          <?php
          $counter++;
        }
        ?>
</div>
        </div>
      </div>
      <div class="text-center mt-5">
    <button class="btn btn-primary" onclick="openCustomerPage()">Give Review</button>
</div>

<script>
    function openCustomerPage() {
        window.location.href = "./customer.php";
    }
</script>
    </div>
  </section>

  <!-- end client section -->
  <!-- result section -->

  <section class="result_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="./assets/images/result-img.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-4 col-md-5">
          <div class="detail-box">
            <h2>
              BUILT TO BRING <br>
              BEST RESULTS
            </h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
            </p>
            <a href="">
              Get A Quote
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end result section -->
  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          <span>
            Get In Touch
          </span>
        </h2>
      </div>
      <div class="layout_padding2-top">
        <div class="row">
          <div class="col-md-6 ">
            <form method="post" enctype="multipart/form-data">
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" name="name" placeholder="Name" />
                  </div>
                  <div>
                    <input type="email" name="email" placeholder="Email" />
                  </div>
                  <div>
                    <input type="number" name="phone" placeholder="Phone Number" />
                  </div>
                  <div class="mt-5">
                    <input type="text" name="message" placeholder="Message" />
                  </div>
                  <div class="mt-5">
                    <button type="submit" name="submit">
                      Send
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6">
            <div class="map_container">
              <div class="map-responsive">
                <iframe
                  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                  width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%"
                  allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->
  <!-- info section -->

  <section class="info_section layout_padding2-top">
    
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h6>
            About GoldenGym
          </h6>
          <p>
          Golden Gym is a premier fitness center that provides a wide range of fitness and wellness services to individuals of all fitness levels. With its state-of-the-art facilities and experienced trainers, Golden Gym is dedicated to helping its members achieve their health and fitness goals.


          </p>
        </div>
        <div class="col-md-2 offset-md-1">
          <h6>
            Menus
          </h6>
          <ul>
            <li class=" active">
              <a class="" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="">
              <a class="" href="about.php">About </a>
            </li>
            <li class="">
              <a class="" href="service.php">Services </a>
            </li>
            <li class="">
              <a class="" href="contact.php">Contact Us</a>
            </li>
            <li class="">
              <a class="" href="login.php">Login</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h6>
            Useful Links
          </h6>
          <ul>
            <li>
              <a href="">
                Adipiscing
              </a>
            </li>
            <li>
              <a href="">
                Elit, sed
              </a>
            </li>
            <li>
              <a href="">
                do Eiusmod
              </a>
            </li>
            <li>
              <a href="">
                Tempor
              </a>
            </li>
            <li>
              <a href="">
                incididunt
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h6>
            Contact Us
          </h6>
          <div class="info_link-box">
            <a href="">
              <img src="./assets/images/location-white.png" alt="">
              <span> No.123, loram ipusm</span>
            </a>
            <a href="">
              <img src="./assets/images/call-white.png" alt="">
              <span>+01 12345678901</span>
            </a>
            <a href="">
              <img src="./assets/images/mail-white.png" alt="">
              <span> GoldenGym@gmail.com</span>
            </a>
          </div>
          <div class="info_social">
            <div>
              <a href="">
                <img src="./assets/images/facebook-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="./assets/images/twitter-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="./assets/images/linkedin.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="./assets/images/instagram.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->
  <!-- footer section -->
  <section class="container-fluid footer_section ">
    <p>
      &copy; 2019 All Rights Reserved. Design by
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="./assets/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="./assets/js/bootstrap.js"></script>

  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document
        .querySelector(".custom_menu-btn")
        .classList.toggle("menu_btn-style");
    }
  </script>
</body>

</html>