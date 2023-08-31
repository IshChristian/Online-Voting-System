<?php
 include "config.php";
 session_start();

?>


<!doctype html>
<html class="no-js"  lang="en">

	<head>
		<!-- META DATA -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

		<!-- TITLE OF SITE -->
		<title>Online Voting</title>

		<!-- favicon img -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>

		<!--font-awesome.min.css-->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--animate.css-->
		<link rel="stylesheet" href="assets/css/animate.css" />

		<!--hover.css-->
		<link rel="stylesheet" href="assets/css/hover-min.css">

		<!--datepicker.css-->
		<link rel="stylesheet"  href="assets/css/datepicker.css" >

		<!--owl.carousel.css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css"/>

		<!-- range css-->
        <link rel="stylesheet" href="assets/css/jquery-ui.min.css" />

		<!--bootstrap.min.css-->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />

		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css"/>

		<!--style.css-->
		<link rel="stylesheet" href="assets/css/style.css" />

		<!--responsive.css-->
		<link rel="stylesheet" href="assets/css/responsive.css" />

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>
		<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
			your browser</a> to improve your experience and security.</p>
		<![endif]-->

		<!-- main-menu Start -->
		<header class="top-area">
			<div class="header-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-2">
							<div class="logo">
								<a href="index.html">
									Rwanda<span>Voting</span>
								</a>
							</div><!-- /.logo-->
						</div><!-- /.col-->
						<div class="col-sm-10">
							<div class="main-menu">
							
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<i class="fa fa-bars"></i>
									</button><!-- / button-->
								</div><!-- /.navbar-header-->
								<div class="collapse navbar-collapse">		  
									<ul class="nav navbar-nav navbar-right">
										<li class="smooth-menu"><a href="#home">home</a></li>
										<!-- <li class="smooth-menu"><a href="#gallery">Destination</a></li> -->
										<li class="smooth-menu"><a href="#pack">Voting </a></li>
										<!-- <li class="smooth-menu"><a href="#spo">Special Offers</a></li> -->
										<!-- <li class="smooth-menu"><a href="#blog">blog</a></li> -->
										<li class="smooth-menu"><a href="#subs">subscription</a></li>
										<li>
											<button class="book-btn">Voting now
											</button>
										</li><!--/.project-btn--> 
									</ul>
								</div><!-- /.navbar-collapse -->
							</div><!-- /.main-menu-->
						</div><!-- /.col-->
					</div><!-- /.row -->
					<div class="home-border"></div><!-- /.home-border-->
				</div><!-- /.container-->
			</div><!-- /.header-area -->

		</header><!-- /.top-area-->
		<!-- main-menu End -->

		
		<!--about-us start -->
		<section id="home" class="about-us">
			<div class="container">
				<div class="about-us-content">
					<div class="row">
						<div class="col-sm-12">
							<div class="single-about-us">
								<div class="about-us-txt">
									<h2>
										Rwanda Fast Online Voting 

									</h2>
									<div class="about-btn">
										<button  class="about-view">
											Voting now
										</button>
									</div><!--/.about-btn-->
								</div><!--/.about-us-txt-->
							</div><!--/.single-about-us-->
						</div><!--/.col-->
						<div class="col-sm-0">
							<div class="single-about-us">
								
							</div><!--/.single-about-us-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.about-us-content-->
			</div><!--/.container-->

		</section><!--/.about-us-->
		<!--about-us end -->

		
        

		<!--discount-offer start-->
		<section class="discount-offer">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="dicount-offer-content text-center">
							<h2>Join with us within 7 March, 2019 </h2>
							<div class="campaign-timer">
								<div id="timer">
									<div class="time time-after" id="days">
										<span></span>
									</div><!--/.time-->
									<div class="time time-after" id="hours">

									</div><!--/.time-->
									<div class="time time-after" id="minutes">

									</div><!--/.time-->
									<div class="time" id="seconds">

									</div><!--/.time-->
									
									<?php 
									$sel=mysqli_query($conn, "SELECT category.action FROM `category` where id=1");
									while($log=mysqli_fetch_array($sel)){
										$close=$log['action'];
									  ?>
			
			               			<div class="row">
										<p name="closed" style="font-size: 40px;color: white;"><?php echo $close ?></p>
									</div>
									  <?php
									}
									?>

									
								</div><!--/.timer-->
							</div><!--/.campaign-timer-->
							<div class="about-btn">
								<button  class="about-view discount-offer-btn">
									Join now
								</button>
							</div><!--/.about-btn-->


						</div><!-- /.dicount-offer-content-->
					</div><!-- /.col-->
				</div><!-- /.row-->
			</div><!-- /.container-->

		</section><!-- /.discount-offer-->
		<!--discount-offer end-->

		<!--packages start-->
		<section id="pack" class="packages">
			<div class="container">
				<div class="gallary-header text-center">
					<h2>
						Candidates Voting
					</h2>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, repellendus.
					</p>
				</div><!--/.gallery-header-->
				
						
						
						
						
						
						
							<?php
																$sel=mysqli_query($conn, "SELECT * FROM candidate ");
																while($log=mysqli_fetch_array($sel)){
																	$_SESSION['cid']=$log['id'];
																?>
																<div class="col-md-4 col-sm-6">
																<div class="single-package-item">

																<option value="turkey"></option><!-- /.option-->
																<img src="assets/images/home/rwanda-peace-hand-nation.jpg" alt="package-place">
																		<div class="single-package-item-txt">
																			<h3><?php echo $log['firstname']; ?> <?php echo $log['lastname']; ?><span class="pull-right">
									
																			</span></h3>
																			<div class="packages-para">
																				<p>
																					Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, id dignissimos deserunt quidem aspernatur hic iusto sed suscipit delectus neque?
																				</p>
																				
																			</div><!--/.packages-para-->
																			<div class="packages-review">
																				<p>
																					<i class="fa fa-star"></i>
																					<i class="fa fa-star"></i>
																					<i class="fa fa-star"></i>
																					<i class="fa fa-star"></i>
																					<i class="fa fa-star"></i>
																					<span>447 reviews</span>
																				</p>
																			</div><!--/.packages-review-->
																			<form action="index.php" method='post'>
																			<div class="about-btn">
																				<input type="text" name='id' value='<?php echo $log['id'] ?>' hidden>
																				
																				
																				<button type="submit" name='btn' class="about-view packages-btn">
																				<a href="candidate_form.php?id=<?php echo $log['id']; ?>">
																					Voting now
																					</a>
																				</button>
																				

																			</div><!--/.about-btn-->
																		</form>
																		</div>
																		</div><!--/.single-package-item-->

						                                          </div>

																	<?php
																}
																

													?>
													<div class="col-md-4 col-sm-">
													</div>
								<!--/.single-package-item-txt-->
							<!--/.col-->

					</div><!--/.row-->
				</div><!--/.packages-content-->
			</div><!--/.container-->

		</section><!--/.packages-->
		<!--packages end-->

		<!-- testemonial Start -->
		<section   class="testemonial">
			<div class="container">

				<div class="gallary-header text-center">
					<h2>
						Candidates reviews
					</h2>
					<p>
						Duis aute irure dolor in  velit esse cillum dolore eu fugiat nulla. 
					</p>

				</div><!--/.gallery-header-->

				<div class="owl-carousel owl-theme" id="testemonial-carousel">
               <?php
                $sel=mysqli_query($conn, "SELECT candidate.id,candidate.firstname,candidate.lastname,candidate.category,COUNT(score) as vote FROM `votes`,candidate WHERE candidate.id=votes.c_id GROUP by c_id");
				while($log=mysqli_fetch_array($sel)){
					$cid=$log['id'];
				?>
			
                  
																			
					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="assets/images/client/testimonial1.jpg" alt="img"/>
							</div><!--/.home1-testm-img-->
							<div class="home1-testm-txt">
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
								</p>
								<h3>
									<a href="#">
									<?php echo $log['firstname']; ?> <?php echo $log['lastname']; ?>
									</a>
								</h3>
								<h4><?php echo $log['vote'] ?></h4>
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->

					</div><!--/.item-->
					<?php
					}
					?>

					

					

				</div><!--/.testemonial-carousel-->
			</div><!--/.container-->

		</section><!--/.testimonial-->	
		<!-- testemonial End -->


		
		<!--blog start-->
		

		
		<!--subscribe start-->
		<section id="subs" class="subscribe">
			<div class="container">
				<div class="subscribe-title text-center">
					<h2>
						Join our Subscribers List to Get Regular Update
					</h2>
					<p>
						Subscribe Now. We will send you Best offer for your Trip 
					</p>
				</div>
				<form>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
							<div class="custom-input-group">
								<input type="email" class="form-control" placeholder="Enter your Email Here">
								<button class="appsLand-btn subscribe-btn">Subscribe</button>
								<div class="clearfix"></div>
								<i class="fa fa-envelope"></i>
							</div>

						</div>
					</div>
				</form>
			</div>

		</section>
		<!--subscribe end-->

		<!-- footer-copyright start -->
		<footer  class="footer-copyright">
			<div class="container">
				<div class="footer-content">
					<div class="row">

						<div class="col-sm-3">
							<div class="single-footer-item">
								<div class="footer-logo">
									<a href="index.html">
										tour<span>Nest</span>
									</a>
									<p>
										best travel agency
									</p>
								</div>
							</div><!--/.single-footer-item-->
						</div><!--/.col-->

						<div class="col-sm-3">
							<div class="single-footer-item">
								<h2>link</h2>
								<div class="single-footer-txt">
									<p><a href="#">home</a></p>
									<p><a href="#">destination</a></p>
									<p><a href="#">spacial packages</a></p>
									<p><a href="#">special offers</a></p>
									<p><a href="#">blog</a></p>
									<p><a href="#">contacts</a></p>
								</div><!--/.single-footer-txt-->
							</div><!--/.single-footer-item-->

						</div><!--/.col-->

						<div class="col-sm-3">
							<div class="single-footer-item">
								<h2>popular destination</h2>
								<div class="single-footer-txt">
									<p><a href="#">china</a></p>
									<p><a href="#">venezuela</a></p>
									<p><a href="#">brazil</a></p>
									<p><a href="#">australia</a></p>
									<p><a href="#">london</a></p>
								</div><!--/.single-footer-txt-->
							</div><!--/.single-footer-item-->
						</div><!--/.col-->

						<div class="col-sm-3">
							<div class="single-footer-item text-center">
								<h2 class="text-left">contacts</h2>
								<div class="single-footer-txt text-left">
									<p>+1 (300) 1234 6543</p>
									<p class="foot-email"><a href="#">info@tnest.com</a></p>
									<p>North Warnner Park 336/A</p>
									<p>Newyork, USA</p>
								</div><!--/.single-footer-txt-->
							</div><!--/.single-footer-item-->
						</div><!--/.col-->

					</div><!--/.row-->

				</div><!--/.footer-content-->
				<hr>
				<div class="foot-icons ">
					<ul class="footer-social-links list-inline list-unstyled">
		                <li><a href="#" target="_blank" class="foot-icon-bg-1"><i class="fa fa-facebook"></i></a></li>
		                <li><a href="#" target="_blank" class="foot-icon-bg-2"><i class="fa fa-twitter"></i></a></li>
		                <li><a href="#" target="_blank" class="foot-icon-bg-3"><i class="fa fa-instagram"></i></a></li>
		        	</ul>
		        	<p>&copy; 2017 <a href="https://www.themesine.com">ThemeSINE</a>. All Right Reserved</p>

		        </div><!--/.foot-icons-->
				<div id="scroll-Top">
					<i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div><!--/.scroll-Top-->
			</div><!-- /.container-->

		</footer><!-- /.footer-copyright-->
		<!-- footer-copyright end -->




		<script src="assets/js/jquery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->

		<!--modernizr.min.js-->
		<script  src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


		<!--bootstrap.min.js-->
		<script  src="assets/js/bootstrap.min.js"></script>

		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

		<!-- jquery.filterizr.min.js -->
		<script src="assets/js/jquery.filterizr.min.js"></script>

		<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

		<!--jquery-ui.min.js-->
        <script src="assets/js/jquery-ui.min.js"></script>

        <!-- counter js -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>

		<!--owl.carousel.js-->
        <script  src="assets/js/owl.carousel.min.js"></script>

        <!-- jquery.sticky.js -->
		<script src="assets/js/jquery.sticky.js"></script>

        <!--datepicker.js-->
        <script  src="assets/js/datepicker.js"></script>

		<!--Custom JS-->
		<script src="assets/js/custom.js"></script>


	</body>

</html>
<?php


$btn=  $_POST['btn'];
if($close !== 'opened'){
	?>
	 <script>location.href='error-404.php'</script>
	<?php
}
?>