<!DOCTYPE html>
<html lang="en">

<head>
	<title>Web | CV</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta property="og:type" content="website" />
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="{{asset('admin/css/open-iconic-bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/css/animate.css')}}">

	<link rel="stylesheet" href="{{asset('admin/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/css/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/css/magnific-popup.css')}}">

	<link rel="stylesheet" href="{{asset('admin/css/aos.css')}}">

	<link rel="stylesheet" href="{{asset('admin/css/ionicons.min.css')}}">

	<link rel="stylesheet" href="{{asset('admin/css/flaticon.css')}}">
	<link rel="stylesheet" href="{{asset('admin/css/icomoon.css')}}">
	<link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

@yield('content')

	<section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-6 col-lg-5 d-flex">
					<div class="img-about img d-flex align-items-stretch">
						<div class="overlay"></div>
						<div class="img d-flex align-self-stretch align-items-center"
							style="background-image:url(admin/images/bg_1.png);">
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
					<div class="row justify-content-start pb-3">
						<div class="col-md-12 heading-section ftco-animate">
							<h1 class="big">About</h1>
							<h2 class="mb-4">About Me</h2>
							<p>Halo, sedikit tentang diri saya</p>
							<ul class="about-info mt-4 px-md-0 px-2">
								<li class="d-flex"><span>Name:</span> <span>Arief Rachman Putra</span></li>
								<!-- <li class="d-flex"><span>Date of birth:</span> <span>..................</span></li> -->
								<li class="d-flex"><span>Address:</span> <span>Padang, Sumatera Barat</span></li>
								<!-- <li class="d-flex"><span>Zip code:</span> <span>1000</span></li> -->
								<li class="d-flex"><span>Email:</span> <span>darief119@gmail.com</span></li>
								<!-- <li class="d-flex"><span>Phone: </span> <span>+1-2234-5678-9-0</span></li> -->
							</ul>
						</div>
					</div>
					<div class="counter-wrap ftco-animate d-flex mt-md-3">
						<div class="text">
							<!-- <p class="mb-4">
								<span class="number" data-number="120">0</span>
								<span>Project complete</span>
							</p> -->
							<p><a href="#" class="btn btn-primary py-3 px-3">Download CV</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pb" id="resume-section">
		<div class="container">
			<div class="row justify-content-center pb-5">
				<div class="col-md-10 heading-section text-center ftco-animate">
					<h1 class="big big-2">Resume</h1>
					<h2 class="mb-4">Resume</h2>
					<p>Karir dan Pendidikan</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h4>Karir</h4>
					<div class="resume-wrap ftco-animate">
						<span class="date">2018</span>
						<h2>IT Support (internship)</h2>
						<span class="position">RSUD Dr. Achmad Mochtar, Bukittinggi</span>
						<p class="mt-4">Instalasi, maintenance dan evaluasi terhadap komputer, jaringan komputer dan
							softwate serta hardware di RSUD Dr. Achmad Mochtar, Bukittinggi</p>
					</div>
				</div>

				<div class="col-md-6">
					<h4>Pendidikan</h4>
					<div class="resume-wrap ftco-animate">
						<span class="date">2019 ~ Sekarang</span>
						<h2>Politeknik Negeri Padang</h2>
						<span class="position">D3 Manajemen Informatika</span>
						<p class="mt-5"></p>
					</div>
					<div class="resume-wrap ftco-animate">
						<span class="date">2016 ~ 2019</span>
						<h2>SMK N 2 Padang Panjang</h2>
						<span class="position">Rekayasa Perangkat Lunak</span>
						<p class="mt-4"></p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center mt-5">
				<div class="col-md-6 text-center ftco-animate">
					<p><a href="#" class="btn btn-primary py-4 px-5">Download CV</a></p>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section" id="skills-section">
		<div class="container">
			<div class="row justify-content-center pb-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h1 class="big big-2">Skills</h1>
					<h2 class="mb-4">Skills</h2>
					<p></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 animate-box">
					<div class="progress-wrap ftco-animate">
						<h3>PHP (Laravel, Codeigniter, Yii)</h3>
						<div class="progress">
							<div class="progress-bar color-1" role="progressbar" aria-valuenow="90" aria-valuemin="0"
								aria-valuemax="100" style="width:90%">
								<!-- <span>90%</span> -->
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="progress-wrap ftco-animate">
						<h3>Javascript</h3>
						<div class="progress">
							<div class="progress-bar color-2" role="progressbar" aria-valuenow="60" aria-valuemin="0"
								aria-valuemax="100" style="width:60%">
								<!-- <span>60%</span> -->
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="progress-wrap ftco-animate">
						<h3>HTML</h3>
						<div class="progress">
							<div class="progress-bar color-3" role="progressbar" aria-valuenow="100" aria-valuemin="0"
								aria-valuemax="100" style="width:100%">
								<!-- <span>100%</span> -->
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="progress-wrap ftco-animate">
						<h3>CSS</h3>
						<div class="progress">
							<div class="progress-bar color-4" role="progressbar" aria-valuenow="90" aria-valuemin="0"
								aria-valuemax="100" style="width:100%">
								<!-- <span>90%</span> -->
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="progress-wrap ftco-animate">
						<h3>Bootstrap</h3>
						<div class="progress">
							<div class="progress-bar color-4" role="progressbar" aria-valuenow="90" aria-valuemin="0"
								aria-valuemax="100" style="width:100%">
								<!-- <span>100%</span> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section ftco-project" id="projects-section">
		<div class="container">
			<div class="row justify-content-center pb-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h1 class="big big-2">Projects</h1>
					<h2 class="mb-4">Projects</h2>
					<p></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5">
					<div class="project img ftco-animate d-flex justify-content-center align-items-center"
						style="background-image: url(admin/images/porto/partikel.jpg);">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="#">Partikel</a></h3>
							<span></span>
						</div>
					</div>
				</div>
				<div class="col-md-7">
					<div class="project img ftco-animate d-flex justify-content-center align-items-center"
						style="background-image: url(admin/images/porto/budiman.jpg);">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="http://budimanswalayan.com/">Budiman Swalayan</a></h3>
							<span></span>
						</div>
					</div>
				</div>

				<div class="col-md-7">
					<div class="project img ftco-animate d-flex justify-content-center align-items-center"
						style="background-image: url(admin/images/porto/codbudiman.jpg);">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="https://cod.budimanswalayan.com/">COD Budiman Swalayan</a></h3>
							<span></span>
						</div>
					</div>

					<div class="project img ftco-animate d-flex justify-content-center align-items-center"
						style="background-image: url(admin/images/porto/inatime.jpg);">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="#">Inatime 2020</a></h3>
							<span></span>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="row">
						<div class="col-md-12">
							<div class="project img ftco-animate d-flex justify-content-center align-items-center"
								style="background-image: url(admin/images/porto/dsultan.jpg);">
								<div class="overlay"></div>
								<div class="text text-center p-4">
									<h3><a href="#">D'Sultan Bakery</a></h3>
									<span></span>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="project img ftco-animate d-flex justify-content-center align-items-center"
								style="background-image: url(admin/images/porto/diata.jpg);">
								<div class="overlay"></div>
								<div class="text text-center p-4">
									<h3><a href="http://admin.diata.id/">Diata POS</a></h3>
									<span></span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-5">
					<div class="project img ftco-animate d-flex justify-content-center align-items-center"
						style="background-image: url(admin/images/porto/jualfotocopy.jpg);">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="https://jualfotocopypadang.com/">CV. Insan Mandiri</a></h3>
							<span><a href=""></a></span>
						</div>
					</div>
				</div>
				<div class="col-md-7">
					<div class="project img ftco-animate d-flex justify-content-center align-items-center"
						style="background-image: url(admin/images/porto/ayohijrah.jpg);">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="#">Ayo Hijrah</a></h3>
							<span></span>
						</div>
					</div>
				</div>

				<div class="col-md-7">
					<div class="project img ftco-animate d-flex justify-content-center align-items-center"
						style="background-image: url(admin/images/porto/tvriaceh.jpg);">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="http://tvriaceh.id/index">TVRI Aceh</a></h3>
							<span></span>
						</div>
					</div>
					<div class="project img ftco-animate d-flex justify-content-center align-items-center"
						style="background-image: url(admin/images/porto/ppdb.jpg);">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="https://ppdb.sditpermatapadang.sch.id/">PPDB SDIT Permata</a></h3>
							<span></span>
						</div>
					</div>


				</div>
				<div class="col-md-5">
					<div class="row">
						<div class="col-md-12">
							<div class="project img ftco-animate d-flex justify-content-center align-items-center"
								style="background-image: url(admin/images/porto/mankopar.jpg);">
								<div class="overlay"></div>
								<div class="text text-center p-4">
									<h3><a href="https://mankopar.sch.id/">MAN Kota Pariaman</a></h3>
									<span></span>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="project img ftco-animate d-flex justify-content-center align-items-center"
								style="background-image: url(admin/images/porto/alfasport.jpg);">
								<div class="overlay"></div>
								<div class="text text-center p-4">
									<h3><a href="#">Alfasport</a></h3>
									<span><a href=""></a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="row justify-content-center">
						<div class="col-md-7 ftco-animate text-center">
							<p class="mb-0"><a href="#" class="btn btn-primary py-3 px-5">And Other Projects</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-hireme img margin-top" style="background-image: url(admin/images/bg_1.jpg);">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 ftco-animate text-center">
					<h2>I'm <span>Available</span> for freelancing</h2>
					<p></p>
					<p class="mb-0"><a href="#" class="btn btn-primary py-3 px-5">Hire me</a></p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h1 class="big big-2">Contact</h1>
					<h2 class="mb-4">Contact Me</h2>
					<p></p>
				</div>
			</div>

			<div class="row d-flex contact-info mb-5">
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box p-4 text-center">
						<a href="https://www.instagram.com/a/" target="_blank">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
							<h3 class="mb-4">Instagram</h3>
						</a>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box p-4 text-center">
						<a href="mailto:@gmail.com" target="_blank">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-envelope"></span>
						</div>
							<h3 class="mb-4">Email</h3>
						</a>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box p-4 text-center">
						<a href="https://www.youtube.com/" target="_blank">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-youtube"></span>
						</div>
							<h3 class="mb-4">Youtube</h3>
						</a>
					</div>
				</div>


				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box p-4 text-center">
						<a href="https://www.facebook.com/" target="_blank">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-facebook"></span>
						</div>
							<h3 class="mb-4">Facebook</h3>
						</a>
					</div>
				</div>



			</div>
		</div>
	</section>


	<footer class="ftco-footer ftco-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">

					<p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved | This template is made with <i class="icon-heart color-danger"
							aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</footer>



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" /></svg></div>


	<script src="{{asset('admin/js/jquery.min.js')}}"></script>
	<script src="{{asset('admin/js/jquery-migrate-3.0.1.min.js')}}"></script>
	<script src="{{asset('admin/js/popper.min.js')}}"></script>
	<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin/js/jquery.easing.1.3.js')}}"></script>
	<script src="{{asset('admin/js/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('admin/js/jquery.stellar.min.js')}}"></script>
	<script src="{{asset('admin/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('admin/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('admin/js/aos.js')}}"></script>
	<script src="{{asset('admin/js/jquery.animateNumber.min.js')}}"></script>
	<script src="{{asset('admin/js/scrollax.min.js')}}"></script>

	<script src="{{asset('admin/js/main.js')}}"></script>
</body>

</html>
