<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Carbook - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="carbook-master/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="carbook-master/css/animate.css">
    
    <link rel="stylesheet" href="carbook-master/css/owl.carousel.min.css">
    <link rel="stylesheet" href="carbook-master/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="carbook-master/css/magnific-popup.css">

    <link rel="stylesheet" href="carbook-master/css/aos.css">

    <link rel="stylesheet" href="carbook-master/css/ionicons.min.css">

    <link rel="stylesheet" href="carbook-master/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="carbook-master/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="carbook-master/css/flaticon.css">
    <link rel="stylesheet" href="carbook-master/css/icomoon.css">
    <link rel="stylesheet" href="carbook-master/css/style.css">
  </head>
  <body>  
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark py-3" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Swift<span>Drive</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="/homepage" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="carbook-master/about.html" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="carbook-master/services.html" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="{{route('payments1.index')}}" class="nav-link">Payment</a></li>
	          <li class="nav-item active"><a href="{{route('cars1.index')}}" class="nav-link">Cars</a></li>
              <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a></li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <div class="container p-4">
            @yield('content')
    </div>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><a href="#" class="logo">Swift<span>Drive</span></a></h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
                <li><a href="#" class="py-2 d-block">Term and Conditions</a></li>
                <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
                <li><a href="#" class="py-2 d-block">Privacy &amp; Cookies Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Customer Support</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">FAQ</a></li>
                <li><a href="#" class="py-2 d-block">Payment Option</a></li>
                <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p>
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            </p>
          </div>
        </div>
      </div>
    </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
    </svg>
  </div>

  <script src="carbook-master/js/jquery.min.js"></script>
  <script src="carbook-master/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="carbook-master/js/popper.min.js"></script>
  <script src="carbook-master/js/bootstrap.min.js"></script>
  <script src="carbook-master/js/jquery.easing.1.3.js"></script>
  <script src="carbook-master/js/jquery.waypoints.min.js"></script>
  <script src="carbook-master/js/jquery.stellar.min.js"></script>
  <script src="carbook-master/js/owl.carousel.min.js"></script>
  <script src="carbook-master/js/jquery.magnific-popup.min.js"></script>
  <script src="carbook-master/js/aos.js"></script>
  <script src="carbook-master/js/jquery.animateNumber.min.js"></script>
  <script src="carbook-master/js/bootstrap-datepicker.js"></script>
  <script src="carbook-master/js/jquery.timepicker.min.js"></script>
  <script src="carbook-master/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="carbook-master/js/google-map.js"></script>
  <script src="carbook-master/js/main.js"></script>
  </body>
</html>
