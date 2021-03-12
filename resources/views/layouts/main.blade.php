<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{ asset('theme/img/eggy/eggy.png') }}" type="image/png">
	<title>Eggy Satriani</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{  asset('theme/css/bootstrap.css')  }}">
	<link rel="stylesheet" href="{{  asset('theme/vendors/linericon/style.css')  }}">
	<link rel="stylesheet" href="{{  asset('theme/css/font-awesome.min.css')  }}">
	<link rel="stylesheet" href="{{  asset('theme/vendors/owl-carousel/owl.carousel.min.css')  }}">
	<link rel="stylesheet" href="{{  asset('theme/css/magnific-popup.css')  }}">
	<link rel="stylesheet" href="{{  asset('theme/vendors/nice-select/css/nice-select.css')  }}">
	<!-- main css -->
	<link rel="stylesheet" href="{{  asset('theme/css/style.css')  }}">
</head>

<body>

	<!--================ Start Header Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img width="100px;" src="{{ asset('theme/img/eggy/eggy.png') }}" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-end">
							<li class="nav-item active"><a class="nav-link" href="#beranda">Beranda</a></li>
							<li class="nav-item"><a class="nav-link" href="#profil">
							Profil</a></li>
							<li class="nav-item"><a class="nav-link" href="#pendidikan">
							Pendidikan</a></li>
							<li class="nav-item"><a class="nav-link" href="#skil">
							Skil</a></li>
							<li class="nav-item"><a class="nav-link" href="#pengalaman">
							Pengalaman</a></li>
							<li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
							<li class="nav-item"><a class="nav-link" href="#kontak">
							Kontak</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Area =================-->

	<!--================ Start Home Banner Area =================-->
	<section id="beranda" class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="banner_content">
							<h3 class="text-uppercase">Hell0</h3>
							<h1 class="text-uppercase">Saya Eggy Satriani</h1>
							<h5 class="text-uppercase">Web developer</h5>
							<div class="d-flex align-items-center">
								<!-- <a class="primary_btn" href="#"><span>Hire Me</span></a> -->
								<!-- <a class="primary_btn tr-bg" href="#"><span>Get CV</span></a> -->
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="home_right_img">
							<img class="" src="{{ asset('theme/img/banner/home-right.png') }}" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<!--================ Start About Us Area =================-->
	<section id="profil" class="about_area section_gap">
		<div class="container">
			<div class="row justify-content-start align-items-center">

				<div class="offset-lg-1 col-lg-10">
					<div class="main_title text-left">
						<h2>Profil Singkat</h2>
						<p style="text-align: justify;">
							Hallo saya Eggy Satriani, saya berlatar belakang pendidikan Sistem Informasi dan lulus pada July 2019, terbiasa membangun web dengan menggunakan Laravel Framework, Bootstrap framework, menguasai bahasa pemograman HTML 5, CSS 3, Javascript, PHP, dan Jquery. Saya juga dapat melakukan desian vektor 2D, dan terbiasa dengan menggunakan Inscakpe dan GIMP.
						</p>
						<a class="primary_btn" href=""><span>Download CV</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End About Us Area =================-->

	<section id="pendidikan" class="features_area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="main_title">
						<h2><i class="fa fa-graduation-cap"></i> Pendidikan</h2>
					</div>
					<div class="row feature_inner">
						<div class="col-sm-6 col-md-6">
							<div class="feature_item">
								<h4>SMA N 1 Paloh</h4><h5 style="color: blue">2011 - 2014</h5>
								<p>Jurusan IPA (Ilmu Pengetahuan Alam)</p>
								<p>Sambas Kalimantan Barat - Indonesia</p>
							</div>
						</div>
						<div class="col-sm-6 col-md-6">
							<div class="feature_item">
								<h4>Universitas Tanjungpura </h4><h5 style="color: blue">2014 - 2019</h5>
								<p>Jurusan Sistem Informasi</p>
								<p>Pontianak Kalimantan Barat - Indonesia</p>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</section>

	<section id="skil" class="features_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="main_title">
						<h2><i class="fa fa-rocket"></i> Skil Personal</h2>
					</div>
				</div>
			</div>
			<div class="row feature_inner">
				<div class="col-lg-12 col-md-6">
					<div style="border-top-style: solid; border-top-color: blue;" class="feature_item">
						<h4 align="left">HTML 5</h4>
						<div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">85%</div>
						</div><br>

						<h4 align="left">CSS 3</h4>
						<div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">80%</div>
						</div><br>

						<h4 align="left">PHP</h4>
						<div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">80%</div>
						</div><br>

						<h4 align="left">Javascript</h4>
						<div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 78%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">78%</div>
						</div><br>

						<h4 align="left">Jquery</h4>
						<div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 78%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">78%</div>
						</div><br>

						<h4 align="left">Laravel Framework</h4>
						<div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">80%</div>
						</div><br>

						<h4 align="left">Bootsrap Framework</h4>
						<div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">80%</div>
						</div><br>

						<h4 align="left">Inkscape</h4>
						<div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">80%</div>
						</div><br>

						<h4 align="left">Gimp</h4>
						<div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row feature_inner">
				<div class="col-lg-4 col-md-6">
					<div style="border-bottom-style: solid; border-bottom-color: blue;" class="feature_item">
						<img style="width: 142px;"  src="{{ asset('theme/img/eggy/aws.png') }}" alt="">
						<h4>Cloud Computing</h4>
						<p></p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div style="border-bottom-style: solid; border-bottom-color: blue;" class="feature_item">
						<img style="width: 90px;"  src="{{ asset('theme/img/eggy/ubuntu.png') }}" alt="">
						<h4>Sistem Operasi</h4>
						<p></p>
					</div>
				</div>
				<div  class="col-lg-4 col-md-6">
					<div style="border-bottom-style: solid; border-bottom-color: blue;" class="feature_item">
						<img style="width: 102px;" src="{{ asset('theme/img/eggy/mysql.png') }}" alt="">
						<h4>RDBMS</h4>
						<p></p>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section id="pengalaman" class="features_area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="main_title">
						<h2><img width="30px" src="{{ asset('theme/img/eggy/experience.png') }}" alt=""> Pengalaman</h2>
					</div>
					<div class="row feature_inner">
						<div class="col-sm-6 col-md-6">
							<div class="feature_item">
								<h4>LP3M UNTAN</h4>
								<h5 style="color: blue">2017</h5>
								<p>Perancangan Web Tracer Pengguna Alumni Universitas Tanjungpura Pontianak (magang)</p>
							</div>
						</div>
						<div class="col-sm-6 col-md-6">
							<div class="feature_item">
								<h4>Shopee Campus Competition</h4>
								<h5 style="color: blue">2017</h5>
								<p>10 Besar finalis shopee campus competition bersama tim R.E.D</p>
							</div>
						</div>
					</div>
					<div class="row feature_inner">
						<div class="col-sm-6 col-md-6">
							<div class="feature_item">
								<h4>Front End Programmer</h4><h5 style="color: blue">2017</h5>
								<p>Start Up Abang Desa</p>
							</div>
						</div>
						<div class="col-sm-6 col-md-6">
							<div class="feature_item">
								<h4>Tech In Asia</h4><h5 style="color: blue">2017</h5>
								<p>Berpartisipasi dalam kegiatan tech in asia jakarta 2017 bersama tim Abang Desa</p>
							</div>
						</div>
					</div>
					<div class="row feature_inner">
						<div class="col-sm-12 col-md-12">
							<div class="feature_item">
								<h4>Freelance Programmer</h4><h5 style="color: blue">2019 - Sekarang</h5>
								<p>Zethlabs Indonesia</p>
							</div>
						</div>
					</div>
					<div class="row feature_inner">
						<div class="col-sm-12 col-md-12">
							<div class="feature_item">
								<h4>Digital Talent Scholarship</h4><h5 style="color: blue">2019</h5>
								<p>Peserta Digital Talent Scholarship Kementerian Komunikasi dan Informatika RI Program Fresh Graduate Academy (2019) - AWS Cloud Computing</p>
							</div>
						</div>
					</div>
					<div class="row feature_inner">
						<div class="col-sm-12 col-md-12">
							<div class="feature_item">
								<h4>Sayembara Keamanan Informasi </h4><h5 style="color: blue">2019</h5>
								<p>Juara 1 Sayembara keamanan informasi besama tim SISFO D2E, Dinas Kominfo Prov Kal-Bar</p>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</section>

	<!--================Start Portfolio Area =================-->
	<section class="portfolio_area" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title text-left">
						<h2>Portofolio</h2>
					</div>
				</div>
			</div>
			<div class="filters-content">
				<div class="row portfolio-grid justify-content-center">
					<div class="col-lg-4 col-md-6 all latest">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="{{ asset('theme/img/eggy/porto_ebaper.png') }}" alt="">
								<div class="overlay"></div>
								<a href="{{ asset('theme/img/eggy/porto_ebaper.png') }}" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">E-Baper | IAIN Pontianak</a></h4>
								<p>Manajemen aset dan persediaan</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all popular">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="{{ asset('theme/img/eggy/porto-sipkat.png') }}" alt="">
								<div class="overlay"></div>
								<a href="{{ asset('theme/img/eggy/porto-sipkat.png') }}" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">SIPKAT</a></h4>
								<p>Sistem Pendukung Keputusan Pendistribusian Zakat, menggunakan metode SAW dan BORDA</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all latest">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="{{ asset('theme/img/eggy/porto-sipkat.png') }}" alt="">
								<div class="overlay"></div>
								<a href="{{ asset('theme/img/eggy/porto-sipkat.png') }}" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">SIPKAT V.2</a></h4>
								<p>Sistem Pendukung Keputusan Pendistribusian Zakat,menggunakan metode SAW, TOPSIS, dan BORDA</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all popular">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img width="200px" class="img-fluid w-100" src="{{ asset('theme/img/eggy/sisfod2e.png') }}" alt="">
								<div class="overlay"></div>
								<a href="{{ asset('theme/img/eggy/sisfod2e.png') }}" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">Pengamanan Paper Less Office</a></h4>
								<p>Sayembara Keamanan Informasi DISKOMINFO Prov KAL-BAR</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all following">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="{{ asset('theme/img/eggy/korep.png') }}" alt="">
								<div class="overlay"></div>
								<a href="{{ asset('theme/img/eggy/korep.png') }}" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">Web Komunitas Reptil</a></h4>
								<p></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Portfolio Area =================-->

	<!--================ Start Contact =================-->
	<section id="kontak" class="features_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="main_title">
						<h2>Kontak</h2>
					</div>
				</div>
			</div>
			<div class="row">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>Pontianak, Indonesia</h6>
                            <p></p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="#">+62-812-5133-9677</a></h6>
                            <p></p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="#">eggysatriani@zethlabs.id</a></h6>
                            <p></p>
                        </div>
                        <div class="info_item">
                            <i class="fa fa-globe"></i>
                            <h6><a href="http://eggy.zethlabs.id">eggy.zethlabs.id</a></h6>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
		       		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.4544971897457!2d109.33137442916544!3d-0.023359199998925294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d585891dfbcf7%3A0x7e0f97df9c4166dd!2sGg.%20Kutilang%20Maju%2C%20Mariana%2C%20Kec.%20Pontianak%20Kota%2C%20Kota%20Pontianak%2C%20Kalimantan%20Barat%2078243!5e0!3m2!1sid!2sid!4v1583711306579!5m2!1sid!2sid" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="">
		       		</iframe>
                </div>
            </div>           
		</div>
	</section>
	<!--================ End contact =================-->

	<!--================Footer Area =================-->
	<footer class="footer_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="footer_top flex-column">
						<div class="footer_logo">
							<a href="eggy.zethlabs.id">
								<img width="100px;" src="{{ asset('theme/img/eggy/eggy.png') }}" alt="">
							</a>
							<h4>Follow Me</h4>
						</div>
						<div class="footer_social">
							<a href="https://www.facebook.com/joe.satriani.16940"><i class="fa fa-facebook"></i></a>
							<a href="https://www.linkedin.com/in/eggy-satriani-b11542139/"><i class="fa fa-linkedin"></i></a>
							<a href="https://github.com/Eggysatriani"><i class="fa fa-github"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer_bottom justify-content-center">
				<p class="col-lg-8 col-sm-12 footer-text">
&copy;<script>document.write(new Date().getFullYear());</script><a href="eggy.zethlabs.id" target="_blank"> Eggy Satriani</a>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{ asset('theme/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('theme/js/popper.js') }}"></script>
	<script src="{{ asset('theme/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('theme/js/stellar.js') }}"></script>
	<script src="{{ asset('theme/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('theme/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ asset('theme/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
	<script src="{{ asset('theme/vendors/isotope/isotope-min.js') }}"></script>
	<script src="{{ asset('theme/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('theme/js/jquery.ajaxchimp.min.js') }}"></script>
	<script src="{{ asset('theme/js/mail-script.js') }}"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{ asset('theme/js/gmaps.min.js') }}"></script>
	<script src="{{ asset('theme/js/theme.js') }}"></script>
</body>

</html>