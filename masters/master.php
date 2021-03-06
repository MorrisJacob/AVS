<?php

if(basename($_SERVER['PHP_SELF']) == "index.php"){
	$active = "home";
    $header = "header-transparent";
} elseif(basename($_SERVER['PHP_SELF']) == "clients.php"){
	$active = "clients";
} elseif(basename($_SERVER['PHP_SELF']) == "resources.php"){
	$active = "resources";
} elseif(basename($_SERVER['PHP_SELF']) == "staff.php"){
	$active = "staff";
} elseif(basename($_SERVER['PHP_SELF']) == "services.php"){
	$active = "services";
} elseif(basename($_SERVER['PHP_SELF']) == "solutions.php"){
	$active = "solutions";
} elseif(basename($_SERVER['PHP_SELF']) == "contact.php"){
	$active = "contact";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ad Valorem Solutions</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="images/AVS.jpg" rel="icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="css/site.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v2.0.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<?php include("phpfunctions.php");

?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top <?php if(isset($header)) {echo "header-transparent"; } ?>">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.php"><span>Ad Valorem Solutions</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="<?php if((isset($active)) && ($active == "home")) {echo "active"; } ?>"><a href="index.php">Home</a></li>
          <li class="<?php if((isset($active)) && ($active == "clients")) {echo "active"; } ?>"><a href="clients.php">Clients</a></li>
          <li class="<?php if((isset($active)) && ($active == "resources")) {echo "active"; } ?>"><a href="resources.php">Resources</a></li>
          <li class="<?php if((isset($active)) && ($active == "staff")) {echo "active"; } ?>"><a href="staff.php">Staff</a></li>
          <li class="<?php if((isset($active)) && ($active == "services")) {echo "active"; } ?>"><a href="services.php">Services</a></li>
          <li class="<?php if((isset($active)) && ($active == "solutions")) {echo "active"; } ?>"><a href="solutions.php">Solutions</a></li>
          <li class="<?php if((isset($active)) && ($active == "contact")) {echo "active"; } ?>"><a href="contact.php">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
