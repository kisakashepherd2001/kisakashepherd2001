<?php
  include_once "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Comfort Homes Registration Page</title>
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

        <div class="navbar-inverse" role="navigation">
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
                <li><a href="contact.php">Contact</a></li>
                <li><a href="booking.php">Bookings</a></li>
                <li><a href="mortgage.php">Mortgage Calculator</a></li>
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
    <h2><b>Sign Up</b></h2>
</div>
</div>
<!-- banner -->

<form action=""  method="POST" id="loginpop">
<div class="container">
<div class="spacer">
<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">

    <div class="control-group">
      <input type="text" class="form-control" placeholder="Full Name*" name="name" id="name" 
        title="Full name must contain letters only" required>
        <!-- pattern="[a-zA-Z\s]+" -->
        <!-- <p class="help-block">name should contain only letters</p> -->
        <!-- onBlur="checkEmailAvailability()"   class="input-xlarge" -->
       </div>

       <div class="control-group">
        <input type="email" class="form-control" placeholder="Enter Email*" name="email"
         id="email" required>
      </div>

      <div class="control-group">
        <input type="password" class="form-control" placeholder="Password*" name="password" id="password" 
          title="password should be at least 8 characters" required>
        <!-- pattern="^\S{8,}$"  
         onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 8 characters' : ''); if(this.checkValidity()) 
        form.password_two.pattern = this.value;"
        class="input-xlarge"
        -->
         <p class="help-block">Password should be at least 8 characters</p>
        </div>

        <div class="control-group">
        <input type="password" class="form-control" placeholder="Confirm Password*" name="confirm_password" id="password"  
        required>

        <!-- pattern="^\S{8,}$"
         onchange="this.setCustomValidity(this.validity.patternMismatch ?
         'Please enter the same Password as above' : '')"
         class="input-xlarge"
         -->
        <p class="help-block">Please confirm password</p>
        </div>
      <button type="submit" class="btn btn-success" 
         name="submit">Register</button> 

        
        
        </div>

</div>
</div>
</div>
</form>




<div class="footer">
<div style="background-color: #0BE0FD">

<div class="container">



<div class="row">
            <div class="col-lg-3 col-sm-3">
                   <h4>Quick links</h4>
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
                    <a href="https://www.linkedin.com/company/comfort-homes-properties/?originalSubdomain=ke">
                      <img src="images/linkedin.png" alt="linkedin"></a>
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




<!-- Modal -->

</body>


</html>

<?php

if( isset($_POST['submit'])){

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

//check password parity
if($password === $confirm_password){

//server-side validation
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
  
  }else if( $password == ""){
    ?>
    <script>
      alert('Password is required!');
    </script>
    <?php
  }else if( $confirm_password == ""){
    ?>
    <script>
      alert('Confirm password is required!');
    </script>
    <?php
  }
  else{

    $password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $con -> prepare("INSERT INTO users ( name, email, password ) VALUES (? , ?, ?)");
    $stmt->bind_param("sss", $name, $email, $password);
    $stmt->execute();
  ?>
    <script>
      alert("Account created successfully! You can now sign in");
    </script>
    <?php
  
    $stmt->close();
    $con->close();
  
  }


}else{ ?>
<script>
  alert("Passwords do not match!");
  </script>
  <?php
}








}

?>

