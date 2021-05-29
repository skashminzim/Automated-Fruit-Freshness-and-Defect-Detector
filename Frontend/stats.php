<?php
 session_start();
if(!$_SESSION['AdminLoginId'])
{

    header("Location: signin.php");
    echo "<script>alert('Please login first');</script>";
}
require("connection.php");
//session_start();
?>
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

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	 <link href="css/landing-page.min.css" rel="stylesheet">

	 <style>

   .center {
  margin-left: auto;
  margin-right: auto;

    border-collapse: collapse;

    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.center thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}

.center th,
.center td {
    padding: 12px 15px;
}


.center tbody tr {
    border-bottom: 1px solid #dddddd;
}

.center tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.center tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.center tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}

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

table, th, td {
  border: 1px solid black;
}
</style>

  </head>
  <body class="goto-here">
<!--////////////////////////////////////////php////-->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index1.php"><font size="5">AFDD</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index1.php" class="nav-link"><b>Home</b></a></li>



	          <li class="nav-item"><a href="image1.php" class="nav-link"><b>Image Processing</b></a></li>
			        <li class="nav-item active"><a href="stats.php" class="nav-link"><b>Records</b></a></li>
			            <li class="nav-item"><a href="about1.php" class="nav-link"><b>About</b></a></li>
			  <!-- <li class="nav-item"><a href="signin.php" class="nav-link"><b>Sign in</b></a></li>-->
        <li class="nav-item"><a href="logout.php" class="nav-link"><b>Log Out</b></a></li>


	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
 <div class="hero-wrap hero-bread" style="background-image: url('images/stats1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<!--<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Shop</span></p>-->
            <h1 class="mb-0 bread">Records</h1><br>
          </div>
        </div>
      </div>
    </div>

	 <div class="container">
      <div class="row">
        <div class="col-xl-12 mx-auto">
		 <br>
         <br>
		 <br>


         <br>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form>
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">

              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  <!-- Call to Action -->
  <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h2 class="mb-4">View the amount of fresh food & defected food in one day!</h2>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form method="POST">
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="date" name="dates" class="form-control form-control-lg" placeholder="Enter any date..." >
              </div>
              <div class="col-12 col-md-3">
                <button type="submit" name="search" class="btn btn-block btn-lg btn-primary">Search!</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

	 <div class="container">
      <div class="row">
        <div class="col-xl-12 mx-auto">
          <?php
         if(isset($_POST['search'])){
         print '<br><br>';
          print '<table class="center" >';
            print '<thead>';
             print '<tr class="header">';
                 print '<td>Batch NO</td>';
                 print '<td>Fruit Name</td>';
                 print '<td>Total Kgs</td>';
                 print '<td>Usable Kgs</td>';
                  print '<td>Unusable Kgs</td>';
                  print '<td>Date of Processing</td>';
             print ' </tr>';

            print '</thead>';
            print '<tbody>';


         $date=date('Y-m-d', strtotime($_POST['dates']));
         // $sqli= "SELECT * FROM stats_fruit WHERE `Date of Processing`= '2021-04-18'";
           $sqli= "SELECT * FROM stats_fruit WHERE `Date of Processing`= '$date'";

             $result = mysqli_query($conn,$sqli);

             //echo $result;

            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
               //echo $row;
                echo "<tr>";
                echo "<td>".@$row["Batch No"]."</td>";
                echo "<td>".@$row["Fruit Name"]."</td>";
                echo "<td>".@$row["Total Kgs"]."</td>";
                echo "<td>".@$row["Usable Kgs"]."</td>";
                echo "<td>".@$row["Unusable Kgs"]."</td>";
                echo "<td>".@$row["Date of Processing"]."</td>";
                echo "</tr>";
            }

             print '</tbody>';

          print '</table>';
          print '<br><br>';
          include 'fruitchart.php';

         }
         ?>



        <br>
           <br>
        <br>


           <br>
        </div>

           </tbody>

        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form>
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">

              </div>

            </div>
          </form>
        </div>
      </div>
    </div>


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

          <!--  <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  <!--Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						  < Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.
						</p>-->
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
