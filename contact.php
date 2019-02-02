<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us - Coriftech Solutions</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/icon.ico"/>
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/icon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
<?php include('header.php'); ?>

	<!-- Title page -->
	<section class="bg-img1 kit-overlay1" style="background-image: url(images/bg-05.jpg);">
		<div class="container size-h-3 p-tb-30 flex-col-c-c">
			<h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
				Contact Us
			</h2>

			<div class="flex-wr-c-c">
				<a href="index" class="breadcrumb-item">
					Home 
				</a>

				<span class="breadcrumb-item">
					Contact Us
				</span>
			</div>
		</div>
	</section>

	<!-- Contact -->
	<section class="bg-0 p-t-95 p-b-40">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-sm-10 col-md-6 p-b-60">
					<h3 class="t1-m-5 cl-3 m-b-44">
						Send Us A Message
					</h3>

					<form id="contact-form" class="validate-form" method="post" action="includes/contact-form.php" name="contact">
						<div class="m-b-15 validate-input" data-validate = "Name is required">
							<input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="name" placeholder="Your Name">
						</div>

						<div class="m-b-15 validate-input" data-validate = "Valid email is: ex@abc.xyz">
							<input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="email" placeholder="Your Email">
						</div>

						<div class="m-b-15 validate-input" data-validate = "Phone is required">
							<input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="phone" placeholder="Phone Number">
						</div>

						<div class="m-b-30 validate-input" data-validate = "Message is required">
							<textarea class="size-a-14 t1-m-2 plh-6 cl-6 p-rl-20 p-tb-13 bo-1-rad-4 bcl-12 focus-in1" name="msg" placeholder="Your Message"></textarea>
						</div>

						<button class="size-a-15 flex-c-c bg-11 t1-s-2 text-uppercase cl-0 hov-btn1 trans-02 p-rl-15">
							Send Email
						</button>
					</form>
				</div>

				<div class="col-sm-10 col-md-6 p-b-60">
					<div class="p-l-30 p-l-0-sr767">
						<h3 class="t1-m-5 cl-3 m-b-38">
							Contact Info
						</h3>

						<p class="t1-s-2 cl-6 m-b-9">
							Feel Free to contact us at any point in time via any of the following channels	</p>

						<ul class="p-t-11">
							<li class="flex-wr-s-s t1-s-2 cl-6 p-b-8">
								<span class="size-w-3 cl-5">
									<i class="fa fa-home" aria-hidden="true"></i>
								</span>

								<span class="size-w-4">
									Plot A, Family Support way, Opposite U.L.O, Okpanam Road, Asaba, Delta State.
								</span>
							</li>

							<li class="flex-wr-s-s t1-s-2 cl-6 p-b-8">
								<span class="size-w-3">
									<i class="fa fa-envelope-o" aria-hidden="true"></i>
								</span>

                                <span class="size-w-4">
									info@coriftech.com.ng
								</span>
							</li>

							<li class="flex-wr-s-s t1-s-2 cl-6 p-b-8">
								<span class="size-w-3">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</span>

                                <span class="size-w-4">
									<a href="tel:+234902553155" target="_blank">+234902553155</a>
                            </span>

                            </li>
                            <li class="flex-wr-s-s t1-s-2 cl-6 p-b-8">
								<span class="size-w-3">
									<i class="fa fa-whatsapp icon-left" aria-hidden="true"></i>
								</span>

                                <span class="size-w-4">
									<a href="https://wa.me/+2348103506776" target="_blank">+2348103506776</a>
                            </span>

                            </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Map -->

	<!-- Footer -->
	<?php include('footer.php'); ?>


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
<!--===============================================================================================-->
	<script src="vendor/waypoint/jquery.waypoints.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countterup/jquery.counterup.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
<!--===============================================================================================-->

	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/contact.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>