<?php
include_once "connection.php";

$query = "select * from properties";
$result = mysqli_query($con, $query);

if(!$result){
	echo "Error Found!!!";
}
     
?>

<!DOCTYPE html>
<html lang="en">

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Comfort Homes Real Estate Management System</title>
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

        <div class="navbar-inverse" style="background-color: "#0BE0FD">
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
                <li><a href="calculator.html">Mortgage Calculator</a></li>
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
                <li><a href="list-properties.php">Properties available</a>
                	 <ul class="dropdown">
                    	<li><a href="sale.php">Properties on Sale</a></li>
                        <li><a href="rent.php">Properties on Rent</a></li>
                    </ul>
                </li>

              </ul>
           </div>
</div>
<!-- #Header Starts -->
</div>
<div class="">


            <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">

          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-1"></div>
              <h2><a href="#">Affordable property on Sale</a></h2>
              <blockquote>
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span>Goodhopes gardens</p>
             
              <cite>Ksh 1,000,000</cite>
              </blockquote>
            </div>
          </div>

          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-2"></div>
              <h2><a href="#">Affordable property on Sale</a></h2>
              <blockquote>
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span>Highrise Gardens</p>
                  <cite>Ksh 500,000</cite>
              </blockquote>
            </div>
          </div>

          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-3"></div>
              <h2><a href="#">Affordable property on Sale</a></h2>
              <blockquote>
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span>Lenchani Plots </p>
              <cite>Ksh. 100,000</cite>
              </blockquote>
            </div>
          </div>

          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-4"></div>
              <h2><a href="#">Affordable property on Sale</a></h2>
              <blockquote>
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span>Amani Gardens Kisaju</p>
              <cite>Ksh. 500,000</cite>
              </blockquote>
            </div>
          </div>

          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-5"></div>
              <h2><a href="#">Affordable property on Sale</a></h2>
              <blockquote>
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Diaspora Gardens</p>

              <cite>Ksh. 500,000</cite>
              </blockquote>
            </div>
          </div>
        </div><!-- /sl-slider -->



        <nav id="nav-dots" class="nav-dots">
          <span class="nav-dot-current"></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </nav>

      </div><!-- /slider-wrapper -->
</div>



<div class="banner-search">
  <div class="container">
    <!-- banner -->
    <h3> Properties on Sale & Rent</h3>
    <div class="searchbar">
      <div class="row">
        <div class="col-lg-6 col-sm-6">
        <form action="search.php" method="post">
          <input name="search" type="text" class="form-control" placeholder="Search for Properties">
          <div class="row">
            <div class="col-lg-3 col-sm-3 ">
              <select name="delivery_type" class="form-control">
                <option value="Rent">Sale</option>
                <option value="Sale">Rent</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
             <select name="search_price" class="form-control">
                <option>Price</option>
                <option value="1">Ksh.5000 - Ksh.50,000</option>
                <option value="2">Ksh.50,000 - Ksh.100,000</option>
                <option value="3">Ksh.100,000 - Ksh.200,000</option>
                <option value="4">Ksh.200,000 - above</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
           <select name="property_type" class="form-control">
                <option>Property Type</option>
                <option value="Residential">Residential</option>
                <option value="Argricultural">Argricultural</option>
            </select>
              </div>
              <div class="col-lg-3 col-sm-4">
              <button name="submit" class="btn btn-success"  onclick="window.location.href='buysalerent.html'">Find Now</button>
              </form>
              </div>
          </div>


        </div>
        <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
          <p><b>Sign up to get started</b></p>
          <button class="btn btn-info"   data-toggle="modal" data-target="#loginpop">Sign In</button></div>
      </div>
    </div>
  </div>
</div>
<!-- banner -->
<div class="container">
  <div class="properties-listing spacer"> <a href="list-properties.php" class="pull-right viewall">View All Listing</a>
    <h2>Featured Properties</h2>
    <div id="owl-example" class="owl-carousel">



      <?php
	  	while($property_result = mysqli_fetch_assoc($result)){
			$id = $property_result['property_id'];
			$property_title = $property_result['property_title'];
			$delivery_type = $property_result['delivery_type'];
			$availablility = $property_result['availablility'];
			$price = $property_result['price'];
			$property_img = $property_result['property_img'];
			$utility = $property_result['utility'];

	  ?>
      <div class="properties">
        <div class="image-holder"><img src="images1/comf3.jpg" class="img-responsive" alt="properties">
        <?php if($availablility == 0){ ?><div class="status sold">Available</div> <?php } else { ?>
          <div class="status new">Not Available</div>
          <?php } ?>
        </div>

       <!-- <img class="img-responsive" src="images1/comf2.jpg" alt="properties">-->


        <h4><a href="property-detail.php?id=<?php echo $id; ?>"><?php echo $property_title;  ?></a></h4>
        <p class="price">Price:Ksh.<?php echo $price; ?></p>
        <p class="price">Delivery Type: <?php echo $delivery_type; ?></p>
        <p class="price">Utilities: <?php echo $utility; ?></p>
        
        <a class="btn btn-primary" href="property-detail.php?id=<?php echo $id; ?>">View Details</a>
      </div>

      <?php } ?>

    </div>
  </div>
  <div class="spacer">
    <div class="row">
      <div class="col-lg-12 col-sm-12 recent-view">
        <h3><b>About Us</b></h3>
        <p>Comfort Homes is a pre-eminent focused real estate company selling value added plots from as low as Ksh. 450,000 with a large, well-balanced portfolio comprised of residential, commercial and mixed-use plots.<br><a href="about.html">Learn More</a></p>
      </div>

    </div>
  </div>
</div>



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
<span class="glyphicon glyphicon-map-marker"></span>Mfangano Street

Information House, 3rd Floor Rm 309.

Nairobi, Kenya.<br>
<span class="glyphicon glyphicon-envelope"></span>info@jcomforthomes.co.ke / sales@jcomforthomes.co.ke<br>
<span class="glyphicon glyphicon-earphone"></span> +254 791 789 833</p>
            </div>
        </div>
</div></div>




<!-- Modal -->
<div id="loginpop" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="row">
        <div class="col-sm-6 login">
        <h4>Sign In</h4>
          <form action="index.php" method="POST" class="" role="form">
        <div class="form-group">
          <!-- <label class="sr-only" for="exampleInputEmail2">Email address</label> -->
          <input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email address" title="Please enter your email address" required>
        </div>
        <div class="form-group">
<!--           <label class="sr-only" for="exampleInputPassword2">Password</label> -->
          <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password" title="Please enter your password" required>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Remember me
          </label>
        </div>
        <button type="submit" name="submit" class="btn btn-success">Sign in</button>
      </form>

        </div>
        <div class="col-sm-6">
          <h4>New User Sign Up</h4>
          <p>Join us today and get updated with all the properties deals happening around.</p>
          <button type="submit" class="btn btn-info"  onclick="window.location.href='register.php'">Join Now</button>
        </div>
        <?php 
        


        ?>


      </div>
    </div>
  </div>
</div>
<!-- /.modal -->




</body>


</html>

<?php

if( isset($_POST['submit'])){

  $email = $_POST['email'];
  $password = $_POST['password'];


  if( $email ==""){

    ?>
    <script>
      alert('Email is required!');
    </script>
    
  <?php
  }else if( $password == ""){
    ?>
    <script>
      alert('Please, enter password!');
    </script>
    <?php

  }
  else{
    $query= "SELECT * FROM users WHERE email = '$email'";

    // $query_password = "SELECT * FROM users WHERE password = '$password'";
    $result = mysqli_query($con, $query);
    $con->close();

    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $email = $row['email'];
        $user_password = $row['password'];
        $name = $row['name'];
      
        //check if password is correct
        echo "$user_password from db!";
        echo "$password from input";
        if(password_verify($password, $user_password)){
          
        //add to session
            $_SESSION['id'] = $id;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            $_SESSION['name'] = $name;
            ?>
           
            <script>
              alert('Login Successful!');
              window.location.href='/realestate/list-properties.php';
            </script>
            <?php
          
        }else{
          ?>
          <script>
            alert('Invalid  password!');
          </script>
          <?php
        }
      
      }
      
    }else{
      ?>
      <script>
        alert('Invalid email!');
      </script>
      <?php
    }
  }
    
}

?>

