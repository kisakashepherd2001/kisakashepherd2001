<?php
include_once "connection.php";

if(isset($_GET['id'])){
	$pageid = $_GET['id'];
}

$query = "select * from properties, agent where properties.property_id = '$pageid' and properties.agent_id = agent.agent_id";
$result = mysqli_query($con, $query);

if(!$result){
	echo "Error Found!!!";
}

while($property_result = mysqli_fetch_assoc($result)){
			$property_title = $property_result['property_title'];
			$property_details = $property_result['property_details'];
			$delivery_type = $property_result['delivery_type'];
			$availablility = $property_result['availablility'];
			$price = $property_result['price'];
			$property_address = $property_result['property_address'];
			$property_img = $property_result['property_img'];
			// $bed_room = $property_result['bed_room'];
			// $liv_room = $property_result['liv_room'];
			// $parking = $property_result['parking'];
			// $kitchen = $property_result['kitchen'];
			$utility = $property_result['utility'];
			$property_type = $property_result['property_type'];
			

			$agent_name = $property_result['agent_name'];
			$agent_address = $property_result['agent_address'];
			$agent_contact = $property_result['agent_contact'];
			$agent_email = $property_result['agent_email'];
}
?>

<?php
$imgquery = "select * from property_image where property_id = '$pageid'";
$imgresult = mysqli_query($con, $imgquery);

if(!$imgresult){
	echo "Error Found!!!";
}
?>

<!DOCTYPE html>
<html lang="en">


<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Property Details</title>
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
                <li><a href="list-properties.php">Listed Properties</a>
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
    <h2>Property Details</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 hidden-xs">


<div class="search-form"><h4><span class="glyphicon glyphicon-search"></span> Search for</h4>
  <form action="search.php" method="post" name="search">
    <input type="text" class="form-control" name="search" placeholder="Search of Properties">
    <div class="row">
            <div class="col-lg-5">
              <select name="delivery_type" class="form-control">
                <option value="Rent">Rent</option>
                <option value="Sale">Sale</option>
              </select>
            </div>
            <div class="col-lg-7">
              <select name="search_price" class="form-control">
                <option>Price</option>
                <option value="1">Ksh.5000 - Ksh.50,000</option>
                <option value="2">Ksh.50,000 - Ksh.100,000</option>
                <option value="3">Ksh.100,000 - Ksh.200,000</option>
                <option value="4">Ksh.200,000 - above</option>
              </select>
            </div>
          </div>

          <div class="row">
          <div class="col-lg-12">
            <select name="property_type" class="form-control">
                <option>Property Type</option>
                <option value="Residential">Residential</option>
                <option value="Argricultural">Argricultural</option>
            </select>
              </div>
          </div>
          <button name="submit" class="btn btn-primary">Find Now</button>
</form>
  </div>


</div>

<div class="col-lg-9 col-sm-8 ">

<h2><?php echo $property_title; ?></h2>
<div class="row">
  <div class="col-lg-8">
  <div class="property-images">
    <!-- Slider Starts -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->

      <div class="carousel-inner">
      	<!-- Item 0 -->
        <div class="item active">
          <img src="images1/hotsprings1.jpg" class="properties" alt="properties" />
        </div>
        <!-- #Item 0 -->

        <!-- Item 1 -->
        <?php
			while($imageresult = mysqli_fetch_assoc($imgresult)){
				$image = $imageresult['property_images'];

		?>
        <div class="item">
          <img src="<?php echo $image; ?>" class="properties" alt="properties" />
        </div>
        <?php } ?>
        <!-- #Item 1 -->
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
<!-- #Slider Ends -->

  </div>




  <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Properties Detail</h4>
  <p><?php echo $property_details; ?></p>

  </div>
  <div><h4><span class="glyphicon glyphicon-map-marker"></span> Location</h4>
<div class="well"><?php echo $property_address; ?></div>
  </div>

  </div>
  <div class="col-lg-4">
  <div class="col-lg-12  col-sm-6">
<div class="property-info">
<div class="well">
<b> Agent Details:</b> <br>
<span class="glyphicon glyphicon-user"></span> <?php echo $agent_name ?><br>
<span class="glyphicon glyphicon-map-marker"></span> <?php echo $agent_address; ?><br>
<span class="glyphicon glyphicon-phone-alt"></span> <?php echo $agent_contact; ?><br>
<span class="glyphicon glyphicon-envelope"></span> <?php echo $agent_email; ?><br>
</div>

<div class="well"><p class="price"> Ksh.<?php echo $price; ?></p></div>

  <p class="area"><div class="well"><span class="glyphicon glyphicon-map-marker"></span> <?php echo $property_address; ?> </div></p>

</div>

    <div class="well"><span class="glyphicon glyphicon-check"></span> &nbsp; <b>Availabilty - <?php if($availablility == 0){echo "Available";} else {echo "Not Available";} ?></b></div>
    <div class="well"><span class="glyphicon glyphicon-home"></span> &nbsp; <b>Property Type - <?php echo $property_type; ?></b></div>

  

</div>
<div class="col-lg-12 col-sm-6 ">

</div>
  </div>
</div>
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




<!-- Modal --><div id="loginpop" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="row">
        <div class="col-sm-6 login">
        <h4>Sign In</h4>
          <form class="" role="form">
        <div class="form-group">
          <!-- <label class="sr-only" for="exampleInputEmail2">Email address</label> -->
          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email address">
        </div>
        <div class="form-group">
<!--           <label class="sr-only" for="exampleInputPassword2">Password</label> -->
          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Remember me
          </label>
        </div>
        <button type="submit" class="btn btn-success">Sign in</button>
      </form>
        </div>
        <div class="col-sm-6">
          <h4>New User Sign Up</h4>
          <p>Join us today and get updated with all the properties deal happening around.</p>
          <button type="submit" class="btn btn-info"  onclick="window.location.href='register.html'">Join Now</button>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- /.modal -->



</body>

</html>
