<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo( 'title' ); ?></title>
	<!-- <link rel="stylesheet" href="css/reset.css"> -->
	<link rel="stylesheet" href="/wp-content/themes/vivo/style.css">
	<!-- <link rel="stylesheet" href="css/news.css"> -->
	<script src="/wp-content/themes/vivo/js/jquery.js"></script>
	<script src="/wp-content/themes/vivo/js/imgLiquid-min.js"></script>
	<script src="/wp-content/themes/vivo/js/main.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js?sensor=false">
</script>
</head>
<body>
		<header class="">
			<div class="colored-line"></div>
			<div class="clearfix">
				<a href="/" class="logo"><img src="img/logo.png" height="86" width="258" alt=""></a>

				<nav class="header-menu">
					<div class="triangle"></div>
					<? wp_nav_menu(array(
					  'menu' => 'header-menu', // название меню
					  'container' => '', // контейнер для меню, по умолчанию 'div', в нашем случае ставим 'nav', пустая строка - нет контейнера
					  'container_class' => '', // класс для контейнера
					  'container_id' => '', // id для контейнера
					  'menu_class' => '', // класс для меню
					  'menu_id' => '', // id для меню
					)); ?>
					<!-- <ul>
						<li id="cursor"></li>
						<li class="active"><a href="">Главная</a></li>
						<li><a href="">О компании</a></li>
						<li><a href="">продукция</a></li>
						<li><a href="">Услуги</a></li>
						<li><a href="">Портфолио</a></li>
						<li><a href="">контакты</a></li>
					</ul> -->
				</nav> 
			</div>
		</header>

		<div class="slider">
			<img src="img/slider-bg.png" alt="">
			<div class="container">
				<div class="slider-left"><a href=""></a></div>
				<div class="slider-right"><a href=""></a></div>
			</div>
			<div class="container">
				<div class="slider-comment">
					<h1>Lorem ipsum dolor sit</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt ex</p>
				</div>
			</div>
		</div>

		<div class="main clearfix">
	<div class="container">
		<div class="main-menu">
			<ul> <!--первый див - прямоугольник, второй - белый круг, который размещается в прямоугольнике-->
				<li class="menu__outdoor"><a href=""><div><div class="main-menu-img outdoor-img"></div></div>Outdoor advertising</a></li>
				<li class="menu__posm"><a href=""><div><div class="main-menu-img posm-img"></div></div>POSM</a></li>
				<li class="menu__btl"><a href=""><div><div class="main-menu-img btl-img"></div></div>BTL</a></li>
				<li class="menu__naming"><a href=""><div><div class="main-menu-img naming-img"></div></div>Naming</a></li>
				<li class="menu__web"><a href=""><div><div class="main-menu-img web-img"></div></div>Web design</a></li>
			</ul>
		</div>