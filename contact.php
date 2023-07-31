<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Contact Us | Dr. Gandhi's Clinic</title>
<?php include('title.php'); ?>
<!-- Favicon Icon -->
<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<!-- Font Awesome Icon -->
<link rel="stylesheet" href="css/all.min.css" type="text/css" />
<!-- Bootstrap - 3 Minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
<!-- AOS Minified CSS -->
<link rel="stylesheet" href="css/aos.min.css" type="text/css" />
<!-- Style CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" />
<!-- Media CSS -->
<link rel="stylesheet" href="css/media.css" type="text/css" />
</head>
<body>
<?php include('menu.php'); ?>
<!-- Banner Section Starts -->
<div class="container-fluid bg-banner-about-page bg-banner-contact-page">
  <div class="row">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 height-75vh" data-aos="fade-up" data-aos-duration="1000">
          <div class="banner-info-inner-page">
            <h1>Contact Us</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Banner Section Ends --> 
<!-- Contact Information Section Starts -->
<div class="container-fluid bg-contact-info-cp">
  <div class="row">
    <div class="container">
      <div class="row flex-align-self-end display-block-mob">
        <div class="col-sm-6 col-md-6 col-lg-6 border-bottom-contact-address-home border-right-contact-address-home">
          <div class="contact-heading-desc-home" data-aos="zoom-in" data-aos-duration="1000">
            <h3>Address</h3>
            <ul class="address-listing">
              <li>
                <address>
                <p>1st Floor, Above Ganesh Dairy, Ganesh Crossing,</p>
                <p>Anand - 388001, Gujarat, India.</p>
                </address>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 border-bottom-contact-address-home">
          <div class="clinic-hrs-heading-desc-home" data-aos="zoom-in" data-aos-duration="1000">
            <h3>Visiting Hours</h3>
            <p><span>Mon - Sat :</span> 09:30 AM to 7:00 PM</p>
            <p><span>Sun :</span> Closed</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6 border-right-contact-address-home">
          <div class="give-us-message-heading-desc-home" data-aos="zoom-in" data-aos-duration="1000">
            <h3>Let's Talk</h3>
            <ul class="contact-listing">
              <li> <a href="tel:+919662519619">+91-9662519619</a> </li>
              <li> <a href="mailto:info@drgandhidental.com">info@drgandhidental.com</a> </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6" id="book">
          <div class="book-appointment-heading-btn-home" data-aos="zoom-in" data-aos-duration="1000">
            <h3>Pick a Date</h3>
            <!--div class="btn-book-appointment-home"> <a href="contact.php"><i class="far fa-calendar-alt"></i> Book Appointment</a> </div-->            
            <!-- Place this tag where you want the 'Contact Us' button to render.-->
            <div class='lybrate-widget' name='dr-ravi-gandhi-dentist' tabs='ba,cp' btn-text='Book Appointment'> <i class="far fa-calendar-alt"></i> </div>
            <span class='lybrate-powered'>&nbsp; <a target='_blank' href='https://www.drgandhidental.com'>&nbsp;</a></span> 
            <!-- Place this tag just before the </head> tag. --> 
            <script type='text/javascript' src='https://www.lybrate.com/js/v101/angular/em-wt.js'></script> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact Information Section Ends -->
<?php include('footer.php'); ?>
<!-- jQuery Library --> 
<script src="js/jquery.min.js"></script> 
<!-- Smooth Scroll Minifed JS --> 
<script src="js/smooth-scroll.min.js"></script> 
<!-- AOS Minified JS --> 
<script src="js/aos.min.js"></script> 
<!-- Main JS --> 
<script src="js/main.js"></script> 
<!-- Custom AOS JS --> 
<script src="js/custom-aos.js"></script>
</body>
</html>