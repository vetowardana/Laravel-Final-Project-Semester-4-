<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="/halaman_pinjam/img/jual_hp_icon.png" type="image/png">
    
    @yield('title')
    
	<link rel="stylesheet" href="{{ asset('halaman_pinjam/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('halaman_pinjam/vendors/linericon/style.css') }}">
	<link rel="stylesheet" href="{{ asset('halaman_pinjam/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('halaman_pinjam/vendors/owl-carousel/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('halaman_pinjam/vendors/lightbox/simpleLightbox.css') }}">
	<link rel="stylesheet" href="{{ asset('halaman_pinjam/vendors/nice-select/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ asset('halaman_pinjam/vendors/animate-css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('halaman_pinjam/vendors/jquery-ui/jquery-ui.css') }}">
	
	<link rel="stylesheet" href="{{ asset('halaman_pinjam/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('halaman_pinjam/css/responsive.css') }}">
	<style>
		  .menu-sidebar-area {
		    list-style-type:none; padding-left: 0; font-size: 15pt;
		  }
		  .menu-sidebar-area > li {
		    margin:0 0 10px 0;
		    list-style-position:inside;
		    border-bottom: 1px solid black;
		  }
		  .menu-sidebar-area > li > a {
		    color: black
		  }
	</style>
	@yield('css')
</head>

<body>
	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="top_menu row m0">
			<div class="container-fluid">
				
				<div class="float-right">
					<ul class="right_side">
						@if (auth()->guard('customer')->check())
							<li><a href="{{ route('customer.logout') }}">Logout</a></li>
						@else
					    	<li><a href="{{ route('customer.login') }}">Login</a></li>
					    @endif
					    <li><a href="{{ route('customer.dashboard') }}">My Account</a></li>
					    <li><a href="https://api.whatsapp.com/send?phone=6282290103450">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="{{ url('/') }}">
						<img src="/halaman_pinjam/img/jual_hp.png" width="180px" height="80px" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					 aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<div class="row w-100">
							<div class="col-lg-7 pr-0">
								@include('layouts.halaman_peminjaman.module.menu')
							</div>

							<div class="col-lg-5">
								<ul class="nav navbar-nav navbar-right right_nav pull-right">
									<hr>
									<li class="nav-item">
										<a href="{{ route('customer.dashboard') }}" class="icons">
											<i class="fa fa-user" aria-hidden="true"></i>
										</a>
									</li>
									<hr>
									<li class="nav-item">
									  <a href="{{ route('front.list_cart') }}" class="icons">
									    <i class="lnr lnr lnr-cart"></i>
									  </a>
									</li>
									<hr>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

    @yield('content')
    
    <!--================ Subscription Area ================-->
	<!-- <section class="subscription-area section_gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2>Subscribe for Our Newsletter</h2>
                        <span>We won’t send any kind of spam</span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div id="mc_embed_signup">
                        <form target="_blank" novalidate action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&id=92a4423d01"
                            method="get" class="subscription relative">
                            <input type="email" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'"
                                required="">
                            <div style="position: absolute; left: -5000px;">
                                <input type="text" name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="">
                            </div>
                            <button type="submit" class="newsl-btn">Get Started</button>
                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--================ End Subscription Area ================-->

	<!--================ start footer Area  =================-->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-5  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">About Us</h6>
						<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
					</div>
				</div>
				<div class="col-lg-5 col-md-6 col-sm-6">
					<div class="single-footer-widget f_social_wd">
						<h6 class="footer_title">Follow Us</h6>
						<p>Let us be social</p>
						<div class="f_social">
							<a href="https://web.facebook.com/kacamata.gaming.5473">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#">
								<i class="fa fa-instagram"></i>
							</a>						
						</div>
					</div>
				</div>
			</div>
			<div class="row footer-bottom d-flex justify-content-between align-items-center">
				<p class="col-lg-12 footer-text text-center">
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
                    All rights reserved | <a href="{{ url('/') }}">Jualhp.com</a> 
                    
				</p>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->

	<script src="{{ asset('halaman_pinjam/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('halaman_pinjam/js/popper.js') }}"></script>
	<script src="{{ asset('halaman_pinjam/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('halaman_pinjam/js/stellar.js') }}"></script>
	<script src="{{ asset('halaman_pinjam/vendors/lightbox/simpleLightbox.min.js') }}"></script>
	<script src="{{ asset('halaman_pinjam/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ asset('halaman_pinjam/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
	<script src="{{ asset('halaman_pinjam/vendors/isotope/isotope-min.js') }}"></script>
	<script src="{{ asset('halaman_pinjam/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('halaman_pinjam/js/jquery.ajaxchimp.min.js') }}"></script>
	<script src="{{ asset('halaman_pinjam/vendors/counter-up/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('halaman_pinjam/vendors/flipclock/timer.js') }}"></script>
	<script src="{{ asset('halaman_pinjam/vendors/counter-up/jquery.counterup.js') }}"></script>
	<script src="{{ asset('halaman_pinjam/js/mail-script.js') }}"></script>
	<script src="{{ asset('halaman_pinjam/js/theme.js') }}"></script>
	@yield('js')
</body>
</html>