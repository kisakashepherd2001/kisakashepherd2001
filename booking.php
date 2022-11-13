
<?php
include_once "connection.php";

?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Book now!</title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/style.css"/>
  <script src="assets/jquery-1.9.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/script.js"></script>



<!-- Owl stylesheet -->
<link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
<script src="assets/owl-carousel/owl.carousel.js"></script>
<!-- Owl stylesheet -->


<!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css" />
    <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js"></script>
<!-- slitslider -->

<script src='assets/google_analytics_auto.js'></script></head>

<body>


<!-- Header Starts -->
<div class="navbar-wrapper">

        <div class="navbar-inverse" style="background-color: #030303">
          <div class="container">
            <div class="navbar-header">


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
               <li class="active"><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->





<div class="container">

<!-- Header Starts -->
<div class="header">
<a href="index.php"><img src="images1/comforthomes.png" alt="Realestate"></a>

            <div class="menu">
              <ul class="pull-right">
              	<li><a href="index.php">Home</a></li>
                <li><a href="list-properties.php">Properties Available</a>
                	 <ul class="dropdown">
                    	<li><a href="sale.php">Properties on Sale</a></li>
                        <li><a href="rent.php">Properties on Rent</a></li>
                    </ul>
                </li>

              </ul>
           </div>
</div>
<!-- #Header Starts -->
</div><!-- banner -->
<div class="inside-banner">
  <div class="container">
    <h2>Book Now For A Site Visit</h2>
</div>
</div>
<!-- banner -->

<form action="booking.php" method="POST">
<div class="container">
<div class="spacer">
<div class="row contact">
  <div class="col-lg-6 col-sm-6 ">

                <input type="text" class="form-control" name="name" placeholder="Name" required>
                <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                <input type="date" class="form-control" name="date" placeholder="Date" required>
                <!-- -->
      <button type="submit" class="btn btn-success" name="submit">Book site visit</button>




        </div>
  <div class="col-lg-6 col-sm-6 ">
  <div class="well"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.81121003451!2d36.82606414982278!3d-1.2873858359846362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f111b41bfe849%3A0x6ef2d4055b1d9b38!2sAffordable%20Prime%20Plots%20For%20Sale%20-%20Comfort%20Homes!5e0!3m2!1sen!2ske!4v1668101309220!5m2!1sen!2ske" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen="" loading="lazy"
     referrerpolicy="no-referrer-when-downgrade"></iframe></div>
  </div>
</div>
</div>
</div>
</form>




<div style="background-color: #0BE0FD">

<div class="container">



<div class="row">
            <div class="col-lg-3 col-sm-3">
                   <h4>Quick Links</h4>
                   <ul class="row">
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="index.php">Home</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="about.html">About</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="booking.php">Booking</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="contact.php">Contact</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="calculator.php">Mortgage Calculator</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-sm-3">
                    <h4>Follow us</h4>
                    <a href="https://www.facebook.com/comforthomeske/"><img src="images/facebook.png" alt="facebook"></a>
                    <a href="https://twitter.com/comforthomes_ug?lang=en"><img src="images/twitter.png" alt="twitter"></a>
                    <a href="https://www.linkedin.com/company/comfort-homes-properties/?originalSubdomain=ke"><img src="images/linkedin.png" alt="linkedin"></a>
            </div>

                          <div class="col-lg-3 col-sm-3">
                    <h4>Contact us</h4>
                    <p><b>Comforthomes Your Real Estate partner</b><br>
<span class="glyphicon glyphicon-map-marker"></span> Mfangano Street

 Information House, 3rd Floor Rm 309.

Nairobi, Kenya.<br>
<span class="glyphicon glyphicon-envelope"></span> info@jcomforthomes.co.ke / sales@jcomforthomes.co.ke<br>
<span class="glyphicon glyphicon-earphone"></span>+254 791 789 833</p>
            </div>
        </div>
</div></div>








</body>



</html>


<?php

if( isset($_POST['submit'])){

$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];

if( $name ==""){

  ?>
  <script>
    alert('Name is required!');
  </script>
  
<?php
}else if( $email == ""){
  ?>
  <script>
    alert('Email is required!');
  </script>
  <?php

}else if( $date == " "){
  ?>
  <script>
    alert('Date is required!');
  </script>
  <?php
}else{

  $stmt = $con -> prepare("INSERT INTO booking ( name, email, date ) VALUES (? , ?, ?)");
  $stmt->bind_param("sss", $name, $email, $date);
  $stmt->execute();
?>
  <script>
    alert('Booked successfully!');
  </script>
  <?php

  $stmt->close();
  $con->close();

}




}else{

  echo "";

}


?>