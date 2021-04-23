<?php
require("connection.php");
session_start();
if(isset($_POST['Signin']))
{ $query="SELECT * FROM `admin_login` WHERE `Admin_name`='$_POST[AdminName]' AND `Admin_email`='$_POST[EmailAddress]' AND `Admin_password`='$_POST[Password]'";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)==1)
{
  //session_start();
  $_SESSION['AdminLoginId']=$_POST['AdminName'];
  header("Location: stats.php");
}
else {
  echo "<script>alert('Incorrect Information');</script>";
}
}?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Automated Freshness & Defection Detector</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/aos.css">
<link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/ionicons.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
 <link href="css/landing-page.min.css" rel="stylesheet">
 <style>
.switch {
position: relative;
display: inline-block;
width: 60px;
height: 34px;
}
.switch input {
opacity: 0;
width: 0;
height: 0;
}
.slider {
position: absolute;
cursor: pointer;
top: 0;
left: 0;
right: 0;
bottom: 0;
background-color: #ccc;
-webkit-transition: .4s;
transition: .4s;
}
.slider:before {
position: absolute;
content: "";
height: 26px;
width: 26px;
left: 4px;
bottom: 4px;
background-color: white;
-webkit-transition: .4s;
transition: .4s;
}
input:checked + .slider {
background-color: #2196F3;
}
input:focus + .slider {
box-shadow: 0 0 1px #2196F3;
}
input:checked + .slider:before {
-webkit-transform: translateX(26px);
-ms-transform: translateX(26px);
transform: translateX(26px);
}
/* Rounded sliders */
.slider.round {
border-radius: 34px;
}
.slider.round:before {
border-radius: 50%;
}
</style></head>
<body class="goto-here">
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php"><font size="5">AFDD</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link"><b>Home</b></a></li>



          <li class="nav-item"><a href="image.php" class="nav-link"><b>Image Processing</b></a></li>
      <li class="nav-item"><a href="stats.php" class="nav-link"><b>Statistics</b></a></li>
                <li class="nav-item"><a href="about.php" class="nav-link"><b>About</b></a></li>
       <li class="nav-item active"><a href="signin.php" class="nav-link"><b>Sign in</b></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
<div class="hero-wrap hero-bread" style="background-image: url('images/signin.jpeg');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <!--<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Shop</span></p>-->
          <h1 class="mb-0 bread">Sign in</h1>
        </div>
      </div>
    </div>
  </div>
<div class="container" id="modal-signup">
  <div class="row">
    <div class="col-lg-10 col-xl-9 mx-auto">
      <div class="card card-signin flex-row my-5">
        <div class="card-img-left d-none d-md-flex">
           <!-- Background image for card set in CSS! -->
        </div>
        <div class="card-body">
          <h1 class="card-title text-center">OWNER LOGIN</h1>
          <form class="form-signin" id="signup-form" method="POST">
            <div class="form-label-group">
              <input type="text" id="inputUserame" class="form-control" placeholder="Admin Name" name="AdminName" required autofocus>
              <label for="inputUserame">Owner Name</label>
            </div>

            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="EmailAddress" required>
              <label for="inputEmail">Email address</label>
            </div>



            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="Password" required>
              <label for="inputPassword">Password</label>
            </div>

            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="Signin">Sign In</button>
<!--
            <div class="extra">
              <a href="#">Forgot Password?</a>
            </div>
-->
    <!-- <p><h6>Already have an account?</h6></p>
       <a class="btn btn-lg btn-primary btn-block text-uppercase" href="ninjasignin.php">Sign In</a>
       <!--"d-block text-center mt-2 small"-->
            <hr class="my-4">

    </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<hr>
<!-- Footer -->
 <footer class="ftco-footer ftco-section">
    <div class="container">
      <div class="row">
        <div class="mouse">
          <a href="#" class="mouse-icon">
            <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
          </a>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Automated Freshness & Defection Detector</h2>
            <p>Know what you eat</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">

              <li class="ftco-animate"><a href="https://www.facebook.com/Tietheknot06/"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="https://l.facebook.com/l.php?u=https%3A%2F%2Finstagram.com%2Ftietheknot06%3Figshid%3D1wwrwccc9uf7r%26fbclid%3DIwAR2tzDpI-pAx76c_CiDzVk2C-dob5FoQz6as5tsKzpQyuRBxnKqmklw8nG4&h=AT0IdzoWKWHFxYb2XgHDB_gNhgoPv8cfye-TqtB9LNzaBMV6zVOPM1IzD01oLRi14o0KBj0Kl_tgttv2HX1fIFMHYWwEOO8C6rt9ezJEdOjAnHoThVwkhp-v2p0Eg37KhscBLNfk7C48Y10"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Menu</h2>
            <ul class="list-unstyled">
              <li><a href="#" class="py-2 d-block"></a></li>
              <li><a href="#" class="py-2 d-block">About</a></li>
              <li><a href="#" class="py-2 d-block">Journal</a></li>
              <li><a href="#" class="py-2 d-block">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
           <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Help</h2>
            <div class="d-flex">
              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                <li><a href="#" class="py-2 d-block">event's Information</a></li>

                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
              </ul>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">FAQs</a></li>
                <li><a href="#" class="py-2 d-block">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Have a Questions?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">Gulshan ,Dhaka</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+029890137</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">afdd.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
        </div>
      </div>
    </div>
  </footer>
<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  <script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>
</body>
</html>
