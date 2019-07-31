<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home - Coriftech Solutions</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<link rel="stylesheet" type="text/css" href="vendor/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="vendor/revolution/css/navigation.css">
	<link rel="stylesheet" type="text/css" href="vendor/revolution/css/settings.css">
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
<?php include('header.php') ?>

<hr>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-6 p-b-60">
                <h3 class="t1-m-5 cl-3 m-b-44">
               Register for Aptech Scholarship of The Year 2019 
                </h3>

                <form  class="validate-form" method="post" action="scholarship.php" >
                    <div class="m-b-15 validate-input" data-validate = "Name is required">
                        <input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="name" placeholder="Fullname" required>
                    </div>

                    <div class="m-b-15 validate-input" data-validate = "Valid email is: ex@abc.xyz">
                        <input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="email" name="email" placeholder="Email">
                    </div>

                    <div class="m-b-15 validate-input" data-validate = "Phone is required">
                        <input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="phone" placeholder="Phone Number">
                    </div>
                  
                    <div class="m-b-15 validate-input" data-validate = "Name is required">
                        <select class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" name="state" required>
                            <option value=" "> --Select Residence State-- </option>

                            <option value="male"> Onitsha </option>
                            <option value="female">Delta</option>


							<option value="Outside Nigeria">Outside Nigeria</option>
							<option value="ABUJA">ABUJA FCT</option>
							<option value="ABIA">ABIA</option>
							<option value="ADAMAWA">ADAMAWA</option>
							<option value="AKWA IBOM">AKWA IBOM</option>
							<option value="ANAMBRA">ANAMBRA</option>
							<option value="BAUCHI">BAUCHI</option>
							<option value="BAYELSA">BAYELSA</option>
							<option value="BENUE">BENUE</option>
							<option value="BORNO">BORNO</option>
							<option value="CROSS RIVER">CROSS RIVER</option>
							<option value="DELTA">DELTA</option>
							<option value="EBONYI">EBONYI</option>
							<option value="EDO">EDO</option>
							<option value="EKITI">EKITI</option>
							<option value="ENUGU">ENUGU</option>
							<option value="GOMBE">GOMBE</option>
							<option value="IMO">IMO</option>
							<option value="JIGAWA">JIGAWA</option>
							<option value="KADUNA">KADUNA</option>
							<option value="KANO">KANO</option>
							<option value="KATSINA">KATSINA</option>
							<option value="KEBBI">KEBBI</option>
							<option value="KOGI">KOGI</option>
							<option value="KWARA">KWARA</option>
							<option value="LAGOS">LAGOS</option>
							<option value="NASSARAWA">NASSARAWA</option>
							<option value="NIGER">NIGER</option>
							<option value="OGUN">OGUN</option>
							<option value="ONDO">ONDO</option>
							<option value="OSUN">OSUN</option>
							<option value="OYO">OYO</option>
							<option value="OYO">PLATEAU</option>
							<option value="RIVERS">RIVERS</option>
							<option value="SOKOTO">SOKOTO</option>
							<option value="TARABA">TARABA</option>
							<option value="YOBE">YOBE</option>
							<option value="ZAMFARA">ZAMFARA</option>

                        </select>
                    </div>
                    
                    <div class="m-b-15 validate-input" data-validate = "Name is required">
                        <select class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" name="sex" required>
                            <option value=" "> --Select Sex-- </option>

                            <option value="male"> Male </option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="m-b-15 validate-input" data-validate = "Name is required">
                        <select class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" name="course" required>
                            <option value=" "> --Select Course- </option>

                            <option value="Aptech Certified Computer Professional (ACCP)"> Aptech Certified Computer Professional (ACCP) </option>
                            <option value="Certificate of Proficiency in System Management (CPISM)">Certificate of Proficiency in System Management (CPISM)</option>
                            <option value="Diploma in Information System Managements(DISM)"> Diploma in Information System Managements(DISM) </option>
                            <option value="CompTIA A+">CompTIA A+</option>
                            <option value="CompTIA Security+"> Onitsha </option>
                            <option value="CompTIA Security+">CompTIA Security+</option>
                            <option value="CCNA/CCNP"> CCNA/CCNP </option>
                            <option value="Programming with Python">Programming with Python</option>
                            <option value="PHP and MY SQLi"> PHP and MY SQLi </option>
                            <option value="Mobile Development">Mobile Development</option>
                            <option value="Certified Ethical Hacker(CEH)"> Certified Ethical Hacker(CEH) </option>
                            <option value="Certified Secured Computer User (CSCU)">Certified Secured Computer User (CSCU)</option>
                            <option value="Microsoft Office Power User(MOPU)"> Onitsha </option>
                            <option value="female">Microsoft Office Power User(MOPU)</option>
                            <option value="Video Editing"> Video Editing </option>
                            <option value="Java Programming I&II">Java Programming I&II</option>
                            <option value="Website Design & Development"> Website Design & Development </option>
                            <option value="Digital Marketting">Digital Marketting</option>
                            <option value="Graphics Designing"> Graphics Designing </option>
                            <option value="Graphics Designing">Graphics Designing</option>
                            <option value="Auto CAD"> Auto CAD </option>
                            <option value="Database Management (SQL Server) and many more">Database Management (SQL Server) and many more</option>

                        </select>
                    </div>
                    



                    <button class="size-a-15 flex-c-c bg-11 t1-s-2 text-uppercase cl-0 hov-btn1 trans-02 p-rl-15" type="submit" name="register">
                        Spin
                    </button>


                                    </form>


	
	<!-- Number -->


	<!-- Partners -->
	<section class="bg-0 p-t-92 p-b-40">
		<div class="container">
			<!-- Title section -->
			<div class="flex-col-c-c p-b-50">
				<h3 class="t1-b-1 cl-3 txt-center m-b-11">
					Business Partners
				</h3>

				<div class="size-a-2 bg-3"></div>
			</div>

			<!--  -->
			<div class="row justify-content-center">
				<div class="col-sm-4 col-lg-2 flex-c-c p-b-60">
					<a href="#">
						<img class="hov-img2 trans-02 max-s-full" src="images/business2.jpg" alt="IMG">
					</a>
				</div>

				<div class="col-sm-4 col-lg-2 flex-c-c p-b-60">
					<a href="#">
						<img class="hov-img2 trans-02 max-s-full" src="images/business2.png" alt="IMG">
					</a>
				</div>

				<div class="col-sm-4 col-lg-2 flex-c-c p-b-60">
					<a href="#">
						<img class="hov-img2 trans-02 max-s-full" src="images/business3.png" alt="IMG">
					</a>
				</div>

				<div class="col-sm-4 col-lg-2 flex-c-c p-b-60">
					<a href="#">
						<img class="hov-img2 trans-02 max-s-full" src="images/business4.png" alt="IMG">
					</a>
				</div>

				<div class="col-sm-4 col-lg-2 flex-c-c p-b-60">
					<a href="#">
						<img class="hov-img2 trans-02 max-s-full" src="images/business5.png" alt="IMG">
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Testimonials -->


	<!-- Sign up -->
	<section class="bg-12 p-t-92 p-b-90">
		<div class="container">
			<!-- Title section -->
			<div class="flex-col-c-c p-b-44">
				<h3 class="t1-b-1 cl-3 txt-center m-b-11">
					Sign Up
				</h3>

				<div class="size-a-2 bg-3"></div>
			</div>

			<!--  -->
			<div class="size-w-1 m-rl-auto">
				<p class="size-w-2 m-rl-auto t1-s-2 cl6 txt-center p-b-13">
					Subscribe to Our NewsLetter and get daily Updates on our products and services
				</p>

				<form class="flex-wr-c-c">
					<input class="size-a-5 bo-all-1 bcl-11 t1-m-2 cl-6 plh-6 p-rl-20 w-full-sr575 m-tb-10" type="text" name="email" placeholder="email@example.com">

					<button class="size-a-6 flex-c-c bg-11 t1-s-2 text-uppercase cl-0 hov-btn1 trans-02 m-tb-10">
						Subscribe
					</button>
				</form>
			</div>
		</div>
	</section>
	
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
	<script src="vendor/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script src="vendor/revolution/js/jquery.themepunch.revolution.min.js"></script>
	<script src="vendor/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script src="vendor/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	<script src="vendor/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="vendor/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="vendor/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="vendor/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="vendor/revolution/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="vendor/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
	<script src="js/revo-custom.js"></script>
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
	<script src="js/main.js"></script>

</body>
</html>