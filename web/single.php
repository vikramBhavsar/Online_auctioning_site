<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!-- ------------------our own code --------------------- -->
<!-- ------------------our own code --------------------- -->
<!-- ------------------our own code --------------------- -->
<!-- ------------------our own code --------------------- -->
<!-- ------------------our own code --------------------- -->
<!-- ------------------our own code --------------------- -->
<?php 
	// this php code includes makes sessions and handles session. to logout just call destroySession();
    include 'makeSession.php';
?>

<!-- ------------------our own code --------------------- -->
<!-- ------------------our own code --------------------- -->
<!-- ------------------our own code --------------------- -->
<!-- ------------------our own code --------------------- -->
<!-- ------------------our own code --------------------- -->
<!-- ------------------our own code --------------------- -->



<!DOCTYPE html>
<html>
<head>
<title>Elite Shoppy an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Single :: w3layouts</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //tags -->

<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main2.css">

<script src='js/our_own_js.js'></script>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- header -->
<div class="header" id="home">
	<div class="container">
		<ul>

			            <!-- php code for login and logout -->
						<?php
							if(isset($_SESSION['loggedin'])){
								if($_SESSION['loggedin'] == '1'){
									?>
										<li> <a href="logout.php"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign Out </a></li>
										<!-- <li> <a href="logout.php" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign Out </a></li> -->

									<?php
								}else{
									?>
										<li> <a href="login.php" ><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a></li>
										<!-- <li> <a href="login.php" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a></li> -->

								<?php								
								}
							}else{
								?>
									<li> <a href="login.php"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a></li>
									<!-- <li> <a href="login.php" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a></li> -->

								<?php
							}
						?>

			<!-- <li> <a href="logout.php" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up </a></li> -->
			<li> <a href="registration.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up </a></li>
			<li><i class="fa fa-phone" aria-hidden="true"></i> Call : 01234567898</li>

			<?php

				if(isset($_SESSION['username'])){
					$username = $_SESSION['username'];
					?>
					<li><i class="fa fa-user-circle" aria-hidden="true"></i><b>Welcome</b>, <?php echo $username?></li>

					<?php
				}
			?>
		</ul>
	</div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
		<div class="col-md-4 header-middle">
			<form action="#" method="post">
					<input type="search" name="search" placeholder="Search here..." required="">
					<input type="submit" value=" ">
				<div class="clearfix"></div>
			</form>
		</div>
		<!-- header-bot -->
			<div class="col-md-4 logo_agile">
				<h1><a href="index.php">Bid It<i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
			</div>
        <!-- header-bot -->
		<div class="col-md-4 agileits-social top_content">
						<ul class="social-nav model-3d-0 footer-social w3_agile_social">
						                                   <li class="share">Share On : </li>
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>



		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->

<!-- Modal1 -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
									<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Name" required="">
								<label>Name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="Email" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<input type="submit" value="Sign In">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#" data-toggle="modal" data-target="#myModal2" > Don't have an account?</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal1 -->
<!-- Modal2 -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
									<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Name" required="">
								<label>Name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="Email" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="password" required=""> 
								<label>Password</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="Confirm Password" required=""> 
								<label>Confirm Password</label>
								<span></span>
							</div> 
							<input type="submit" value="Sign Up">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#">By clicking register, I agree to your terms</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal2 -->


<!---------------------------------------------------------- OUR OWN CODE ----------------------------------------------------------->
<!---------------------------------------------------------- OUR OWN CODE ----------------------------------------------------------->
<!---------------------------------------------------------- OUR OWN CODE ----------------------------------------------------------->
<!---------------------------------------------------------- OUR OWN CODE ----------------------------------------------------------->
<!---------------------------------------------------------- OUR OWN CODE ----------------------------------------------------------->
<!---------------------------------------------------------- OUR OWN CODE ----------------------------------------------------------->
<!---------------------------------------------------------- OUR OWN CODE ----------------------------------------------------------->
<!---------------------------------------------------------- OUR OWN CODE ----------------------------------------------------------->
<!---------------------------------------------------------- OUR OWN CODE ----------------------------------------------------------->

<?php 
	include 'db_connection.php';

	if(isset($_POST['bidconfirm'])){
			if(!isset($_SESSION['userid'])){
				echo '</br></br><span><h1 align="center">You have to log in to bid on properties</h1></span></br></br>';
			}else{

				$propid = $_POST['pidname'];
				$bidderid = $_SESSION['userid'];
				$bidding = $_POST['userbidinp'];

				put_bid_information($propid,$bidderid,$bidding);

				echo '</br></br><span><h1 align="center">Your Bid has been recorded</h1></span></br></br>';
			}
		}



	
	
	// echo $_POST["pidinp"];
	if(isset($_POST["pidinp"])){

		$pid =  $_POST['pidinp'];
		
		$results = get_property_information_by_id($pid);

		foreach($results as $row){
			$pid = $row['pid'];
			$pname = $row['pname'];
			$startingbid = $row['startingbid'];
			// $getmaximumbid = get_maximum_bid_
			$selname = $row['username'];
			$selemail = $row['emailid'];
			$selphone = $row['phone'];
			$seladdr = $row['address'];
			$typename = $row['typename'];
			$area_sq_feet = $row['area_sq_feet'];
			$property_address = $row['prop_address'];
			$property_age = $row['page'];

								# this method converts the string to lower case 
								// and replaces space with _

			$property_folder =  str_replace(' ','_',strtolower($pname));

			# making the image directory.
			$img_dir = $web_img_dir .'' . $typename . '/'. $property_folder;

			#getting all the photos
			$photos = get_property_photos_by_id($pid);
?>

<!--/single_page-->
       <!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3><?php echo $pname?></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.php">View more</a><i>|</i></li>
								<li>Bid Now</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>


  <!-- banner-bootom-w3-agileits -->
  <div class="banner-bootom-w3-agileits">
	<div class="container">
		<div class="col-md-5 single-right-left ">
									<div class="grid images_3_of_2">
										<div class="flexslider">
											<ul class="slides">



<!-- this pages gets $pidinp from index page when user clicks on 'bid here' from one of the properties -->
<?php
			foreach($photos as $single_photo){
				$temp_img_dir = $img_dir;
				$temp_img_dir = $img_dir ."/". $single_photo['imgsrc'];

				// ending php code
				?>
					<!-- code for putting the side images -->
											<li data-thumb="<?php echo $temp_img_dir?>">
												<div class="thumb-image"> <img src="<?php echo $temp_img_dir?>" data-imagezoom="true" class="img-responsive"> </div>
											</li>

				<!-- starting php code -->
				<?php
				// echo $temp_img_dir . "</br>";
			} //This is end of foreach loop to loop the photos.
			?>
													</ul>
										<div class="clearfix"></div>
									</div>	<!--flexslider div-->
								</div>	<!--grid images div-->
							</div>  <!--cold-md-5 div-->



						<!-- showing property images -->
						<div class="col-md-7 single-right-left simpleCart_shelfItem">
							<div class="container-contact100">

							<div class="wrap-contact100">
								<form class="contact100-form validate-form" method='POST'>
									<!-- <span class="contact100-form-title">
										Property Features :
									</span> -->

									<span class="contact100-form-title">
										<?php echo $pname?>
									</span>

									<!-- <div class="col-md-12" align='center' data-validate="Please enter your name">
										<i class="fa fa-building-o" aria-hidden="true"></i>
										<label><font size='6'>Property name</font></label>
										label>Goregaon West</label><br><br>
									</div>
									<br><br><br> -->
									<input type="hidden" name="pidname" id='pidname' value='<?php echo $pid?>'>
									<div class="col-md-6" data-validate="Please enter your name">
										<i class="fa fa-building-o" aria-hidden="true"></i>
										<label>Area : </label>
										<label><?php echo $area_sq_feet.' sqft'?></label><br><br>
									</div>
									
									<div class="col-md-6" data-validate="Please enter your name">
										<i class="fa fa-inr" aria-hidden="true"></i>
										<label>Price : </label>
										<label id='highestbid'><?php echo $startingbid?></label><br><br>
									</div>
									<div  class="col-md-6" data-validate = "Please enter your email: e@a.x">
										
										<i class="fa fa-map-marker" aria-hidden="true" style="font-size:20px"></i>
										<label>Address: </label>
										<label><?php echo $property_address?></label><br><br>
									</div>
									<br>
									<div class="col-md-6" data-validate = "Please enter your phone">
										<i class="fa fa-building-o" aria-hidden="true"></i>
										<label>Property Age : </label>
										<label><?php echo $property_age." Years"?></label><br><br>
									</div>
									
									<br><br><br><br><br>
									<span class="contact100-form-title col-md-12" id='confirmbidspan'>
										Click the buttons to bid
									</span>
									<!-- <div data-validate = "Please enter your phone">
										<label>Current Bidding Price : </label>
										<label>30,50,000</label><br><br>
									</div> -->

									<div data-validate = "Please enter your phone">
										<label>Your Bid : </label>
										<input type='hidden' name='userbidinp' id='userbidinp' value=''>
										<label id='userbiddinglbl'>30,50,000</label><br><br>
									</div>
											<br>
									<div>

										<div class="contact100-form-btn">
												<button type='button' class="fa fa-plus" id='plus25' aria-hidden="true"></button>
												&nbsp;&nbsp;&nbsp;&nbsp;25K&nbsp;&nbsp;&nbsp;&nbsp;
												<button type='button' class="fa fa-minus" id='minus25' aria-hidden="true"></button>

										</div>
										<div class="contact100-form-btn">
												<button type='button' class="fa fa-plus" id='plus50' aria-hidden="true"></button>
												&nbsp;&nbsp;&nbsp;&nbsp;50K&nbsp;&nbsp;&nbsp;&nbsp;
												<button type='button' class="fa fa-minus" id='minus50' aria-hidden="true"></button>

										</div>
										<div class="contact100-form-btn">
												<button type='button' class="fa fa-plus" id='plus1l' aria-hidden="true"></button>
												&nbsp;&nbsp;&nbsp;&nbsp;1L&nbsp;&nbsp;&nbsp;&nbsp;
												<button type='button' class="fa fa-minus" id='minus1l' aria-hidden="true"></button>
										</div>

										<br><br>
										<div>
											<button type='submit' name='bidconfirm' class="contact100-form-btn" id='submit' aria-hidden="true">Confirm Bid</button>
										</div>
										
										<!-- <span class="contact100-form-title col-md-12">
										</span> -->

										<!-- BELOW DIV FOR BUTTONS -->
									</div>
								</form>
							</div>
						</div>
					</div>
							<!-- <div class="clearfix"> </div> -->
				</div>
			</div>

			<!-- php code below to end the foreachloop -->
			<?php

			//photos have been printed. show the property images now.

			// echo $imgs_dir;
			// use the following to display data. (only used for debugging)
			// echo $pid . "</br>";
			// echo $pname . "</br>";
			// echo $selname . "</br>";
			// echo $typename . "</br>";
		}
	}else{
		?>
		<!-- add javascript code to redirect to different page. -->
		<?php
	}
?>


<!---------------------------------------------------------- OUR OWN CODE ----------------------------------------------------------->
<!---------------------------------------------------------- OUR OWN CODE ----------------------------------------------------------->
<!---------------------------------------------------------- OUR OWN CODE ----------------------------------------------------------->
<!---------------------------------------------------------- OUR OWN CODE ----------------------------------------------------------->
<!---------------------------------------------------------- OUR OWN CODE ----------------------------------------------------------->
<!---------------------------------------------------------- OUR OWN CODE ----------------------------------------------------------->
<!---------------------------------------------------------- OUR OWN CODE ----------------------------------------------------------->
<!---------------------------------------------------------- OUR OWN CODE ----------------------------------------------------------->
<!---------------------------------------------------------- OUR OWN CODE ----------------------------------------------------------->


<!-- footer -->
<div class="footer">
	<div class="footer_agile_inner_info_w3l">
		<div class="col-md-3 footer-left">
			<h2><a href="index.php"><span>E</span>lite Shoppy </a></h2>
			<p>Lorem ipsum quia dolor
			sit amet, consectetur, adipisci velit, sed quia non 
			numquam eius modi tempora.</p>
			<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
		</div>
		<div class="col-md-9 footer-right">
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4>Our <span>Information</span> </h4>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="mens.html">Men's Wear</a></li>
						<li><a href="womens.html">Women's wear</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="typography.html">Short Codes</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				
				<div class="col-md-5 sign-gd-two">
					<h4>Store <span>Information</span></h4>
					<div class="w3-address">
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Phone Number</h6>
								<p>+1 234 567 8901</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Email Address</h6>
								<p>Email :<a href="mailto:example@email.com"> mail@example.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Location</h6>
								<p>Broome St, NY 10002,California, USA. 
								
								</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 sign-gd flickr-post">
					<h4>Flickr <span>Posts</span></h4>
					<ul>
						<li><a href="single.html"><img src="images/t1.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/t3.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/t4.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/t1.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/t3.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/t4.jpg" alt=" " class="img-responsive" /></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
			<div class="agile_newsletter_footer">
					<div class="col-sm-6 newsleft">
				<h3>SIGN UP FOR NEWSLETTER !</h3>
			</div>
			<div class="col-sm-6 newsright">
				<form action="#" method="post">
					<input type="email" placeholder="Enter your email..." name="email" required="">
					<input type="submit" value="Submit">
				</form>
			</div>

		<div class="clearfix"></div>
	</div>
		<p class="copy-right">&copy 2017 Elite shoppy. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
	</div>
</div>
<!-- //footer -->

<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">
										<h3>Sign up for free</h3>
										<form>
											<div class="sign-up">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<h4>Re-type Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<input type="submit" value="REGISTER NOW" >
											</div>
											
										</form>
									</div>
									<div class="login-right">
										<h3>Sign in with your account</h3>
										<form>
											<div class="sign-in">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-in">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												<a href="#">Forgot password?</a>
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<div class="sign-in">
												<input type="submit" value="SIGNIN" >
											</div>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="js/modernizr.custom.js"></script>
	<!-- Custom-JavaScript-File-Links --> 
	<!-- cart-js -->
	<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>

	<!-- //cart-js --> 
	<!-- single -->
<script src="js/imagezoom.js"></script>
<!-- single -->
<!-- script for responsive tabs -->						
<script src="js/easy-responsive-tabs.js"></script>
<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion           
	width: 'auto', //auto or any width like 600px
	fit: true,   // 100% fit in a container
	closed: 'accordion', // Start closed if in accordion view
	activate: function(event) { // Callback function if tab is switched
	var $tab = $(this);
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
	$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
	type: 'vertical',
	width: 'auto',
	fit: true
	});
	});
</script>
<!-- FlexSlider -->
<script src="js/jquery.flexslider.js"></script>
						<script>
						// Can also be used with $(document).ready()
							$(window).load(function() {
								$('.flexslider').flexslider({
								animation: "slide",
								controlNav: "thumbnails"
								});
							});
						</script>
					<!-- //FlexSlider-->
<!-- //script for responsive tabs -->		
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap.js"></script>
<script src='js/our_own_js.js'></script>
</body>
</html>
