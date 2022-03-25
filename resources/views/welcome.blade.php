@extends('template')
@section('content')

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">Hello World</a>
			<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
				data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav nav ml-auto">
					<li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
					<li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
					<li class="nav-item"><a href="#resume-section" class="nav-link"><span>Resume</span></a></li>
					<!-- <li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li> -->
					<li class="nav-item"><a href="#skills-section" class="nav-link"><span>Skills</span></a></li>
					<li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
					<!-- <li class="nav-item"><a href="#blog-section" class="nav-link"><span>My Blog</span></a></li> -->
					<li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
				</ul>
			</div>
		</div>
	</nav>

	<section id="home-section" class="hero">
		<div class="home-slider  owl-carousel">
			<div class="slider-item ">
				<div class="overlay"></div>
				<div class="container">
					<div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end"
						data-scrollax-parent="true">
						<div class="one-third js-fullheight order-md-last img"
							style="background-image:url(admin/images/bg_1.png);">
							<div class="overlay"></div>
						</div>
						<div class="one-forth d-flex  align-items-center ftco-animate"
							data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								<span class="subheading">Hello!</span>
								<h1 class="mb-4 mt-3">I'm <span>Arief</span></h1>
								<h2 class="mb-4">Web Developer</h2>
								<p>
									<a href="#" class="btn btn-primary py-3 px-4">Hire me</a>
									<a href="#" class="btn btn-white btn-outline-white py-3 px-4">My works</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slider-item ">
				<div class="overlay"></div>
				<div class="container">
					<div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end"
						data-scrollax-parent="true">
						<div class="one-third js-fullheight order-md-last img"
							style="background-image:url(admin/images/bg_1.jpg);">
							<div class="overlay"></div>
						</div>
						<div class="one-forth d-flex  align-items-center ftco-animate"
							data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								<span class="subheading">Hello World!</span>
								<h1 class="mb-4 mt-3">I'm <span>Available</span></h1>
								<h2 class="mb-4">for freelancing</h2>
								<p>
									<a href="#" class="btn btn-primary py-3 px-4">Hire me</a>
									<a href="#" class="btn btn-white btn-outline-white py-3 px-4">My works</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection