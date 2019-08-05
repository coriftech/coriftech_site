<style>
.dropdown-menu{padding:0;margin:0;border:0 solid transition!important;border:0 solid rgba(0,0,0,.15);border-radius:0;-webkit-box-shadow:none!important;box-shadow:none!important}
.mainmenu a, .navbar-default .navbar-nav > li > a, .mainmenu ul li a , .navbar-expand-lg .navbar-nav .nav-link{font-size:16px;text-transform:capitalize;padding:12px 11px;display: block !important;}
.mainmenu .active a,.mainmenu .active a:focus,.mainmenu .active a:hover,.mainmenu li a:hover,.mainmenu li a:focus ,.navbar-default .navbar-nav>.show>a, .navbar-default .navbar-nav>.show>a:focus, .navbar-default .navbar-nav>.show>a:hover{color: #fff;outline: 0;}
/*==========Sub Menu=v==========*/
.mainmenu .collapse ul ul > li:hover > a, .navbar-default .navbar-nav .show .dropdown-menu > li > a:focus, .navbar-default .navbar-nav .show .dropdown-menu > li > a:hover{background: #c4c5c6;}

/******************************Drop-down menu work on hover**********************************/
.mainmenu{background: none;border: 0 solid;margin: 0;padding: 0;min-height:20px;width: 100%;}
@media only screen and (min-width: 767px) {
.mainmenu .collapse ul li:hover> ul{display:block}
.mainmenu .collapse ul ul{position:absolute;top:100%;left:0;min-width:250px;display:none}
/*******/
.mainmenu .collapse ul ul li{position:relative}
.mainmenu .collapse ul ul li:hover> ul{display:block}
.mainmenu .collapse ul ul ul{position:absolute;top:0;left:100%;min-width:250px;display:none}
/*******/
.mainmenu .collapse ul ul ul li{position:relative}
.mainmenu .collapse ul ul ul li:hover ul{display:block}
.mainmenu .collapse ul ul ul ul{position:absolute;top:0;left:100%;min-width:250px;display:none}
/* .mainmenu .collapse ul ul ul ul{position:absolute;top:0;left:-100%;min-width:250px;display:none;z-index:1} */


}
@media only screen and (max-width: 767px) {
.navbar-nav .show .dropdown-menu .dropdown-menu > li > a{padding:16px 15px 16px 35px}
.navbar-nav .show .dropdown-menu .dropdown-menu .dropdown-menu > li > a{padding:16px 15px 16px 45px}
}
</style>

<header>
    <!-- Header desktop -->
    <nav class="container-header-desktop">
        <div class="top-bar">
            <div class="content-topbar container flex-sb-c h-full">
                <div class="size-w-0 flex-wr-s-c">
                    <div class="t1-s-1 cl-13 m-r-25">
							<span class="fs-16 m-r-6">
								<i class="fa fa-home" aria-hidden="true"></i>
							</span>
                        <span style="color:#FFF">Plot A, Family Support way, Opposite U.L.O, Okpanam Road, Asaba, Delta State.</span>
                    </div>

                    <div class="t1-s-1 cl-13 m-r-25">
							<span class="fs-16 m-r-6">
								<i class="fa fa-whatsapp icon-left" aria-hidden="true"></i>
							</span>
                        <span> <a href="https://wa.me/+2348103506776" target="_blank">+2348103506776</a></span>
                    </div>

                    <div class="t1-s-1 cl-13 m-r-25">
							<span class="fs-16 m-r-6">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</span>
                        <span>  <a href="tel:+234902553155" target="_blank">+234902553155</a></span>
                    </div>


                </div>

                <div class="text-nowrap">
                    <a href="https://web.facebook.com/coriftech" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                        <i class="fa fa-facebook-official"></i>
                    </a>

                    <a href="#" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                        <i class="fa fa-twitter"></i>
                    </a>

                    <a href="mailto:info@coriftech.com.ng" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                        <i class="fa fa-comment"></i>

                    </a>

                    <a href="#" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                        <i class="fa fa-instagram"></i>
                    </a>

                    <a href="#" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                        <i class="fa fa-linkedin"></i>
                    </a>

                    <a href="#github" class="fs-16 cl-13 hov-link2 trans-02 m-l-15"><i class="fa fa-github"></i></a>
                </div>
            </div>
        </div>

        <div class="wrap-menu-desktop navbar mainmenu">
            <div class="limiter-menu-desktop container">
                <!-- Logo desktop -->
                <div class="logo">
                    <a href="index"><img src="images/icons/logo-01.png" alt="LOGO"></a>
                </div>

                <!-- Menu desktop -->
                <div class="menu-desktop collapse">
                    <ul class="main-menu respon-sub-menu">
                        <li>
                            <a href="index">Home</a>

                        </li>

                        <li>
                            <a href="about">About Us</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Courses</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle">ICT Fundamentals</a>
                                <ul class="dropdown-menu">
                                <li><a href="#">Certificate in Digital Literacy </a></li>
                                <li><a href="#">Diploma in Information Technology</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Database Management Courses</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li class="dropdown">
                                <a href="#" class="dropdown-toggle">Oracle </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Oracle Certified Associate (OCA)</a>
                                        </li>
                                        <li>
                                            <a href="#">Oracle Certified Professional (OCP)</a>
                                        </li>
                                        <li>
                                            <a href="#">Oracle Business Intelligence Enterprise Edition</a>
                                        </li>
                                    </ul>
                                   </li>
                                        <li class="dropdown">
                                        <a href="#" class="dropdown-toggle">Microsoft SQL Server</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="#">Administering Microsoft SQL Server 2014 Databases</a>
                                            </li>
                                            <li>
                                            <a href="#">Querying Microsoft SQL Server</a>
                                            </li>
                                        </ul>
                                        </li>
                                    </ul>
                                </li>
                            <li>
                            <a href="#" class="dropdown-toggle">Data Science</a>
                            <ul class="dropdown-menu">
                               <li>
                               <a href="#">Data Analysis</a>
                               </li>
                                <li>
                                <a href="#">Microsoft Power BI</a>
                                </li>
                                <li>
                                <a href="#">Advanced Microsoft Excel</a>
                                </li>
                            </ul>
                            </li>
                            <li>
                            <a href="#" class="dropdown-toggle">Networking Courses</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="#" class="dropdown-toggle">CompTIA Courses</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a href="#">CompTIA N+</a>
                                </li>
                                </ul>
                                </li>
                                <li><a href="#" class="dropdown-toggle">Cisco</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a href="#">CCNA</a></li>
                                        <li><a href="#">CCNP</a></li>
                                    </ul>
                                </li>
                                </ul>
                            </li>
                            <li>
                            <a href="#" class="dropdown-toggle">Software Engineering Courses</a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="#">Python</a></li>
                                <li><a href="#" class="dropdown-toggle">Java</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a href="#">Java Spring Framework</a></li>
                                        <li><a href="#">Oracle Certified Associate Java SE7 Programmer I (OCJA7)</a></li>
                                        <li><a href="#">Oracle Certified Professional Java SE7 Programmer II Course</a></li>
                                        <li><a href="#">Oracle Certified Associate Java SE7 Programmer I & II</a></li>
                                </ul>
                                </li>

                                <li><a href="#" class="dropdown-toggle">Microsoft</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a href="#">C# Essentials</a></li>
                                </ul>
                                </li>
                                </ul>
                               </li>

                            <li><a href="#" class="dropdown-toggle">Hardware Engineering Courses</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="#">CompTIA A+</a></li>
                                </ul>

                                <li><a href="#">Mobile Apps Development</a></li>

                                <li><a href="#" class="dropdown-toggle">Web Development Courses</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="#">PHP Laravel Frame work</a></li>
                               </ul>

                            </ul>
                            </li>
                            

                        <li>
                            <a href="services">Services</a>
                        </li>
                        <li>
                            <a href="gallery.php">Gallery</a>

                        </li>
                        <li>
                            <a href="product.php">Products</a>

                        </li>
                         
                        <li>
                            <a href="contact">Contact us</a>
                        </li>
                        <li>
                            <a href="Scholarship2019.php">Scholarship2019</a>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Header Mobile -->
    <nav class="container-header-mobile">
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href="index"><img src="images/icons/logo-01.png" alt="LOGO"></a>
            </div>


            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
            </div>
        </div>

        <div class="menu-mobile">
            <ul class="top-bar-m p-l-20 p-tb-8">
                <li>
                    <div class="t1-s-1 cl-5 p-tb-3">
							<span class="fs-16 m-r-6">
								<i class="fa fa-whatsapp" aria-hidden="true"></i>
							</span>
                        <span>Plot A, Family Support way, Opposite U.L.O, Okpanam Road, Asaba, Delta State.</span>
                    </div>
                </li>

                <li>
                    <div class="t1-s-1 cl-5 p-tb-3">
							<span class="fs-16 m-r-6">
								<i class="fa fa-whatsapp" aria-hidden="true"></i>
							</span>
                        <span><a href="https://wa.me/+2348103506776" target="_blank">+2348103506776</a></span>
                    </div>
                </li>

                <li>
                    <div class="t1-s-1 cl-5 p-tb-3">
							<span class="fs-16 m-r-6">
								<i class="fa fa-phone icon-left" aria-hidden="true"></i>
							</span>
                        <span> <a href="tel:+234902553155" target="_blank">+234902553155</a></span>
                    </div>
                </li>

                <li>
                    <div>
                        <a href="#" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                            <i class="fa fa-facebook-official"></i>
                        </a>

                        <a href="#" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                            <i class="fa fa-twitter"></i>
                        </a>

                        <a href="mailto:info@coriftech.com.ng" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                            <i class="fa fa-comment"></i>

                        </a>

                        <a href="#" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                            <i class="fa fa-instagram"></i>
                        </a>

                        <a href="#" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                            <i class="fa fa-linkedin"></i>
                        </a>

                        <a href="github.com/coriftech" class="fs-16 cl-13 hov-link2 trans-02 m-l-15"><i class="fa fa-github"></i></a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>


<script>
(function($){
	$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
	  if (!$(this).next().hasClass('show')) {
		$(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
	  }
	  var $subMenu = $(this).next(".dropdown-menu");
	  $subMenu.toggleClass('show');

	  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
		$('.dropdown-submenu .show').removeClass("show");
	  });

	  return false;
	});
})(jQuery)
</script>