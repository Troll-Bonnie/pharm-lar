<!DOCTYPE html>
<html lang="uk">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>PharmaSmile - @yield('title')</title>	
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}">
	{{--<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">--}}

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}" />
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700|Roboto:400,700&display=swap" rel="stylesheet">
	<link href="{{ asset('assets/css/style_med') }}.css" rel="stylesheet" />
	<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />


    {{--@livewireStyles--}}
</head>
<body class="home-page home-01 hero_area">

	<!--header-->
	<header id="header" class="header header-style-1 header_section">
		<div class="container">
			<div class="top_contact-container">
			<div class="tel_container">
				<a href="">
				<img src="{{ asset('assets/images/telephone-symbol-button.png') }}" alt=""> Телефон : +380 (95) 2926716
				</a>
			</div>
			<div class="social-container">
				<a href="">
				<img src="{{ asset('assets/images/fb.png') }}" alt="" class="s-1">
				</a>
				<a href="">
				<img src="{{ asset('assets/images/twitter.png') }}" alt="" class="s-2">
				</a>
				<a href="">
				<img src="{{ asset('assets/images/instagram.png') }}" alt="" class="s-3">
				</a>
			</div>
			</div>
		</div>
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg custom_nav-container pt-3">
			<a class="navbar-brand" href="/">
				<img src="{{ asset('assets/images/logo.png') }}" alt="">
				<span>
				PharmaSmile
				</span>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<div class="d-flex  flex-column flex-lg-row align-items-center w-100 justify-content-between">
				<ul class="navbar-nav  ">
					<li class="nav-item active">
					<a class="nav-link" href="/">Головна <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="/about"> Про нас </a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="/shop"> Каталог </a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="/news"> Новини </a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="/contact">Контакти</a>
					</li>
				</ul>
				<form class="form-inline ">
					<input type="search" placeholder="Пошук">
					<button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
				</form>
				<div class="login_btn-contanier ml-0 ml-lg-5">
					<a href="">
					<img src="{{ asset('assets/images/user.png') }}" alt="">
					<span>
						Увійти
					</span>
					</a>
				</div>
				</div>
			</div>

			</nav>
		</div>
	</header>

	{{ $slot }}

	<section class="info_section layout_padding2">
    <div class="container">
		<div class="row">
			<div class="col-md-3">
			<div class="info_contact">
				<h4>
				Контакти
				</h4>
				<div class="box">
				<div class="img-box">
					<img src="images/telephone-symbol-button.png" alt="">
				</div>
				<div class="detail-box">
					<h6>
					+380 (95) 2926716
					</h6>
				</div>
				</div>
				<div class="box">
				<div class="img-box">
					<img src="images/email.png" alt="">
				</div>
				<div class="detail-box">
					<h6>
					prikoldem@gmail.com
					</h6>
				</div>
				</div>
			</div>
			</div>
			<div class="col-md-3">
			<div class="info_menu">
				<h4>
				Меню
				</h4>
				<ul class="navbar-nav  ">
				<li class="nav-item active">
					<a class="nav-link" href="/"> Головна <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/about"> Про нас </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/shop"> Каталог </a>
				</li>
				</ul>
			</div>
			</div>
			<div class="col-md-6">
			<div class="info_news">
				<h4>
				Наші новини
				</h4>
				<form action="">
				<input type="text" placeholder="Ваш e-mail">
				<div class="d-flex justify-content-center justify-content-end mt-3">
					<button>
					Підписатися
					</button>
				</div>
				</form>
			</div>
			</div>
		</div>
		</div>
	</section>

	<footer id="footer">
		<section class="container-fluid footer_section">
			<p>
			&copy; 2023 Всі права збережені. Автор дизайну
			<a href="https://html.design/">Free Html Templates</a>
			</p>
		</section>
	</footer>
	
	{{--<script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
	<script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('assets/js/functions.js') }}"></script>--}}

	<script type="text/javascript" src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }}"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
	</script>
	<script type="text/javascript">
		$(".owl-carousel").owlCarousel({
			loop: true,
			margin: 10,
			nav: true,
			navText: [],
			autoplay: true,
			responsive: {
				0: {
				items: 1
				},
				600: {
				items: 2
				},
				1000: {
				items: 4
				}
			}
		});
	</script>
	<script type="text/javascript">
			$(".owl-2").owlCarousel({
			loop: true,
			margin: 10,
			nav: true,
			navText: [],
			autoplay: true,

			responsive: {
				0: {
				items: 1
				},
				600: {
				items: 2
				},
				1000: {
				items: 4
				}
			}
		});
	</script>


{{--@livewireScripts--}}
</body>
</html>