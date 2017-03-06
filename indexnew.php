<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>republica</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="public/assets/styles/larepublica/glr-main.css">
</head>
<body>
	<header class="tem_Header"> 
		<nav class="mol-nav_Tag">
			<div class="cgrid-container">
				<h2 class="Tag__title">Temas</h2>						
				<ul class="Tag__list">
					<?php 
						for ($x = 0; $x <= 9; $x++) {
					    	echo "<li><a href='http://larepublica.pe/'>Redes sociales</a></li>";
						} 
					?>
				</ul>
			</div>		
		</nav>
		<div class="lr-header__main">
			<div class="cgrid-container">
				<strong class="header__logo">
					<a href="/">LA REPÚBLICA.PE</a>
				</strong>
				<ul class="header__social">
					<li class="social__tw">
						<i class="fa fa-twitter" aria-hidden="true"></i>
					</li>
					<li class="social__fb">
						<i class="fa fa-facebook" aria-hidden="true"></i>
					</li>
					<li class="social__ytb">
						<i class="fa fa-youtube-play" aria-hidden="true"></i>
					</li>
					<li class="social__instagram">
						<i class="fa fa-instagram" aria-hidden="true"></i>
					</li>
				</ul>
				<ul class="header__register">
					<li><a href="#">Ingresa</a></li>
					<li><a href="#">Registrate</a></li>
					<li><a href="#">Suscribete</a></li>
				</ul>
				<div class="header__search--input">
					<input type="text" placeholder="Buscar">
				</div>


			</div>
		</div>	
		<nav class="mol-nav_Main">
			<div class="cgrid-container">
				<ul class="main_list">
					<li>
						<a href="">PERÚ</a>
					</li>
					<li>
						<a href="">OPINIÓN</a>
					</li>
					<li>
						<a href="">POLÍTICA</a>
					</li>
					<li>
						<a href="">ECONOMÍA</a>
					</li>
					<li>
						<a href="">INTERNACIONAL</a>
					</li>
					<li>
						<a href="">DEPORTES</a>
					</li>
					<li>
						<a href="">ESPECTÁCULOS</a>
					</li>
					<li>
						<a href="">VIDEO</a>
					</li>
					<li>
						<a href="">TECNOLOGÍA</a>
					</li>
					<li>
						<a href="">ED.IMPRESA</a>						
					</li>
					<li class="list_dropdown">
						<a href="/tag">MAS<i class="fa fa-chevron-down"></i></a>
						<ul class="dropdown">
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<div>
			<div class="cgrid-container">
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">Perú</a></li>
					<li><a href="">Trujillo</a></li>
					<li><a href="">Chiclayo</a></li>
					<li><a href="">Piura</a></li>
					<li><a href="">Arequipa</a></li>
					<li><a href="">Cusco</a></li>
					<li><a href="">Tacna</a></li>
					<li><a href="">Ica</a></li>
					<li><a href="">Moquegua</a></li>
					<li><a href="">Iquitos</a></li>
				</ul>
			</div>
		</div>
	</header>

	<main class="tem_Body">
		<div class="cgrid-container">
			<section class="org-section-featured">
				<div class="cgrid-row">
					<div class="col-8-md">
						<div class="cgrid-row">
							<article class="col-6-xs">
								<div class="mol-post-format-1">
									<figure class="format-1__figure">
										<img class="cover-img__img" src="http://placehold.it/640x251" alt="">
										<span class="atm-btn-live">EN VIVO</span>
									</figure>
									<div class="format-1__text">
										<span><a href="#">NameCategory</a></span>
										<h1 class="text__title">
											<a href="#">Fiscalía hace todo para capturar a Toledo</a>
										</h1>
										<p>Lorem ipsum dolor sit ametdeleniti atque reprehenderit aliquam non autem illum dicta voluptate corporis facere nostrum.</p>
										<ul class="text__social">
											<li class="social__fb"><i class="fa fa-facebook" aria-hidden="true"></i></li>
											<li class="social__tw"><i class="fa fa-twitter" aria-hidden="true"></i></li>
											<li class="social__search"><i class="fa fa-share-alt" aria-hidden="true"></i></li>
										</ul>
									</div>
								</div>
							</article>
						</div>
						<div class="cgrid-row">
							<article class="col-6-md">
								<div class="mol-post-format-2">
									<figure class="format-2__figure">
										<img class="cover-img__img" src="http://placehold.it/310x250" alt="">
										<span class="atm-btn-live">EN VIVO</span>
									</figure>
									<div class="format-2__text">
										<h1 class="text__title">
											<a href="#">Fiscalía hace todo para capturar a Toledo</a>
										</h1>
										<p>Lorem ipsum dolor sit ametdeleniti atque reprehenderit aliquam non autem illum dicta voluptate corporis facere nostrum.</p>
										<ul class="text__social">
											<li class="social__fb"><i class="fa fa-facebook" aria-hidden="true"></i></li>
											<li class="social__tw"><i class="fa fa-twitter" aria-hidden="true"></i></li>
											<li class="social__search"><i class="fa fa-share-alt" aria-hidden="true"></i></li>
										</ul>
									</div>
								</div>
							</article>
							<article class="col-6-md">
								<div class="mol-post-format-2">
									<figure class="format-2__figure">
										<img class="cover-img__img" src="http://placehold.it/310x250" alt="">
										<span class="atm-btn-live">EN VIVO</span>
									</figure>
									<div class="format-2__text">
										<h1 class="text__title">
											<a href="#">Fiscalía hace todo para capturar a Toledo</a>
										</h1>
										<p>Lorem ipsum dolor sit ametdeleniti atque reprehenderit aliquam non autem illum dicta voluptate corporis facere nostrum.</p>
										<ul class="text__social">
											<li class="social__fb"><i class="fa fa-facebook" aria-hidden="true"></i></li>
											<li class="social__tw"><i class="fa fa-twitter" aria-hidden="true"></i></li>
											<li class="social__search"><i class="fa fa-share-alt" aria-hidden="true"></i></li>
										</ul>
									</div>
								</div>
							</article>
						</div>
					</div>
					<div class="col-4-md">
						<div class="mol-editorial">
							<h3>Editorial</h3>
							<div class="editorial__text">
								<p>
									<a href="">Género, idelología y naderías.</a>
								</p>								
							</div>
						</div>
						<article class="">
							<div class="mol-post-format-3">
								<figure class="format-3__figure">
									<img class="cover-img__img" src="http://placehold.it/300x163" alt="">
									<span class="atm-btn-live">EN VIVO</span>
								</figure>
								<div class="format-3__text">
									<h1 class="text__title">
										<a href="#">En 2016 la minería metálica tuvo su crecimiento más alto de los últimos 25 años.</a>
									</h1>
									<ul class="text__social">
										<li class="social__fb"><i class="fa fa-facebook" aria-hidden="true"></i></li>
										<li class="social__tw"><i class="fa fa-twitter" aria-hidden="true"></i></li>
										<li class="social__search"><i class="fa fa-share-alt" aria-hidden="true"></i></li>
									</ul>
								</div>
							</div>
						</article>
						<article class="">
							<div class="mol-post-format-3">
								<figure class="format-3__figure">
									<img class="cover-img__img" src="http://placehold.it/300x163" alt="">
									<span class="atm-btn-live">EN VIVO</span>
								</figure>
								<div class="format-3__text">
									<h1 class="text__title">
										<a href="#">Chimbote: Rescatan a 7 bañistas cuando estaban a punto de morir ahogados.</a>
									</h1>
									<ul class="text__social">
										<li class="social__fb"><i class="fa fa-facebook" aria-hidden="true"></i></li>
										<li class="social__tw"><i class="fa fa-twitter" aria-hidden="true"></i></li>
										<li class="social__search"><i class="fa fa-share-alt" aria-hidden="true"></i></li>
									</ul>
								</div>
							</div>
						</article>
						<div class="advertising">
							<img src="http://placehold.it/300x78" alt="">
						</div>
					</div>
				</div>
			</section>
			<section class="org-section-common org-section-common--multimedia">
				<h3 class="common__title">
					<a href="/tag">Multimedia</a>
				</h3>
				<div class="glr-row">
					<div class="col-3-md">
						<div class="mol-post-format-4">
							<figure class="format-4__figure">
								<a href="#">
									<img src="http://placehold.it/207x116" alt="">
								</a>
							</figure>
							<div class="format-4__title">
								<span class="list-category">VIDEO:</span>
								<h2><a href="">Lady Gaga alborotó los Premios Grammys</a></h2>					
							</div>
						</div>
					</div>
					<div class="col-3-md">
						<div class="mol-post-format-4">
							<figure class="format-4__figure">
								<a href="#">
									<img src="http://placehold.it/207x116" alt="">
								</a>
							</figure>
							<div class="format-4__title">
								<span class="list-category">VIDEO:</span>
								<h2><a href="">Lady Gaga alborotó los Premios Grammys</a></h2>					
							</div>
						</div>
					</div>
					<div class="col-3-md">
						<div class="mol-post-format-4">
							<figure class="format-4__figure">
								<a href="#">
									<img src="http://placehold.it/207x116" alt="">
								</a>
							</figure>
							<div class="format-4__title">
								<span class="list-category">VIDEO:</span>
								<h2><a href="">Lady Gaga alborotó los Premios Grammys</a></h2>					
							</div>
						</div>
					</div>
					<div class="col-3-md">
						<div class="mol-post-format-4">
							<figure class="format-4__figure">
								<a href="#">
									<img src="http://placehold.it/207x116" alt="">
								</a>
							</figure>
							<div class="format-4__title">
								<span class="list-category">VIDEO:</span>
								<h2><a href="">Lady Gaga alborotó los Premios Grammys</a></h2>					
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="body__row-main cgrid-row">
				<div class="col-5-md">
					<section class="org-section-post">
						<h3 class="post__title">
							ÚLTIMAS NOTICIAS 
							<i class="fa fa-angle-double-down"></i>
						</h3>
						<div class="mol-post-format-4">
							<figure class="format-4__figure">
								<a href="">
									<img src="http://placehold.it/205x123" alt="">
								</a>
							</figure>
							<div class="format-4__detail">
								<ul class="detail__list">
									<li class="list-category">
										<a href="/tag">POLICIAL</a>
									</li>
									<li class="list-date">
										<time>13:13</time>
									</li>
								</ul>
								<h2 class="detail__title">
									<a href="">Perú se convertirá en el segundo país en el mundo en certificar bonos de carbono en el sector ferroviario.</a>
								</h2>
								<ul class="detail__social">
									<li class="social__fb"><i class="fa fa-facebook" aria-hidden="true"></i></li>
									<li class="social__tw"><i class="fa fa-twitter" aria-hidden="true"></i></li>
									<li class="social__search"><i class="fa fa-share-alt" aria-hidden="true"></i></li>
								</ul>
							</div>
						</div>
						<div class="mol-post-format-4">
							<figure class="format-4__figure">
								<a href="">
									<img src="http://placehold.it/205x123" alt="">
								</a>
							</figure>
							<div class="format-4__detail">
								<ul class="detail__list">
									<li class="list-category">
										<a href="/tag">JUDICIALES</a>
									</li>
									<li class="list-date">
										<time>13:13</time>
									</li>
								</ul>
								<h2 class="detail__title">
									<a href="">Perú se convertirá en el segundo país en el mundo en certificar bonos de carbono en el sector ferroviario.</a>
								</h2>
								<ul class="detail__social">
									<li class="social__fb"><i class="fa fa-facebook" aria-hidden="true"></i></li>
									<li class="social__tw"><i class="fa fa-twitter" aria-hidden="true"></i></li>
									<li class="social__search"><i class="fa fa-share-alt" aria-hidden="true"></i></li>
								</ul>
							</div>
						</div>
						<div class="mol-post-format-4">
							<figure class="format-4__figure">
								<a href="">
									<img src="http://placehold.it/205x123" alt="">
								</a>
							</figure>
							<div class="format-4__detail">
								<ul class="detail__list">
									<li class="list-category">
										<a href="/tag">JUDICIALES</a>
									</li>
									<li class="list-date">
										<time>13:13</time>
									</li>
								</ul>
								<h2 class="detail__title">
									<a href="">Perú se convertirá en el segundo país en el mundo en certificar bonos de carbono en el sector ferroviario.</a>
								</h2>
								<ul class="detail__social">
									<li class="social__fb"><i class="fa fa-facebook" aria-hidden="true"></i></li>
									<li class="social__tw"><i class="fa fa-twitter" aria-hidden="true"></i></li>
									<li class="social__search"><i class="fa fa-share-alt" aria-hidden="true"></i></li>
								</ul>
							</div>
						</div>
						<div class="mol-post-format-4">
							<figure class="format-4__figure">
								<a href="">
									<img src="http://placehold.it/205x123" alt="">
								</a>
							</figure>
							<div class="format-4__detail">
								<ul class="detail__list">
									<li class="list-category">
										<a href="/tag">JUDICIALES</a>
									</li>
									<li class="list-date">
										<time>13:13</time>
									</li>
								</ul>
								<h2 class="detail__title">
									<a href="">Perú se convertirá en el segundo país en el mundo en certificar bonos de carbono en el sector ferroviario.</a>
								</h2>
								<ul class="detail__social">
									<li class="social__fb"><i class="fa fa-facebook" aria-hidden="true"></i></li>
									<li class="social__tw"><i class="fa fa-twitter" aria-hidden="true"></i></li>
									<li class="social__search"><i class="fa fa-share-alt" aria-hidden="true"></i></li>
								</ul>
							</div>
						</div>
						<div class="mol-post-format-4">
							<figure class="format-4__figure">
								<a href="">
									<img src="http://placehold.it/205x123" alt="">
								</a>
							</figure>
							<div class="format-4__detail">
								<ul class="detail__list">
									<li class="list-category">
										<a href="/tag">JUDICIALES</a>
									</li>
									<li class="list-date">
										<time>13:13</time>
									</li>
								</ul>
								<h2 class="detail__title">
									<a href="">Perú se convertirá en el segundo país en el mundo en certificar bonos de carbono en el sector ferroviario.</a>
								</h2>
								<ul class="detail__social">
									<li class="social__fb"><i class="fa fa-facebook" aria-hidden="true"></i></li>
									<li class="social__tw"><i class="fa fa-twitter" aria-hidden="true"></i></li>
									<li class="social__search"><i class="fa fa-share-alt" aria-hidden="true"></i></li>
								</ul>
							</div>
						</div>
						<div class="mol-post-format-4">
							<figure class="format-4__figure">
								<a href="">
									<img src="http://placehold.it/205x123" alt="">
								</a>
							</figure>
							<div class="format-4__detail">
								<ul class="detail__list">
									<li class="list-category">
										<a href="/tag">JUDICIALES</a>
									</li>
									<li class="list-date">
										<time>13:13</time>
									</li>
								</ul>
								<h2 class="detail__title">
									<a href="">Perú se convertirá en el segundo país en el mundo en certificar bonos de carbono en el sector ferroviario.</a>
								</h2>
								<ul class="detail__social">
									<li class="social__fb"><i class="fa fa-facebook" aria-hidden="true"></i></li>
									<li class="social__tw"><i class="fa fa-twitter" aria-hidden="true"></i></li>
									<li class="social__search"><i class="fa fa-share-alt" aria-hidden="true"></i></li>
								</ul>
							</div>
						</div>
						
						<div class="mol-post-format-5">
							<div class="format-5__detail">
								<ul class="detail__list">
									<li class="list-category">
										<a href="/tag">DEPORTES</a>
									</li>
								</ul>
								<h2 class="detail__title">
									<a href="">¿Quiénes son los 10 jugadores más rápidos del fútbol mundial?</a>
								</h2>
								<div class="photo">
									<figure class="format-5__figure">
										<a href="">
											<img src="http://placehold.it/336x201" alt="">
										</a>
									</figure>
								</div>
								<div class="photo secondary">
									<figure class="format-5__figure">
										<a href="">
											<img src="http://placehold.it/160x96" alt="">
										</a>
									</figure>
								</div>
								<div class="photo secondary">
									<figure class="format-5__figure">
										<a href="">
											<img src="http://placehold.it/160x96" alt="">
										</a>
									</figure>
								</div>
								<ul class="detail__social">
									<li class="social__fb"><i class="fa fa-facebook" aria-hidden="true"></i></li>
									<li class="social__tw"><i class="fa fa-twitter" aria-hidden="true"></i></li>
									<li class="social__search"><i class="fa fa-share-alt" aria-hidden="true"></i></li>
								</ul>
							</div>
						</div>

						<div class="mol-post-format-4">
							<figure class="format-4__figure">
								<a href="">
									<img src="http://placehold.it/205x123" alt="">
								</a>
							</figure>
							<div class="format-4__detail">
								<ul class="detail__list">
									<li class="list-category">
										<a href="/tag">JUDICIALES</a>
									</li>
									<li class="list-date">
										<time>13:13</time>
									</li>
								</ul>
								<h2 class="detail__title">
									<a href="">Perú se convertirá en el segundo país en el mundo en certificar bonos de carbono en el sector ferroviario.</a>
								</h2>
								<ul class="detail__social">
									<li class="social__fb"><i class="fa fa-facebook" aria-hidden="true"></i></li>
									<li class="social__tw"><i class="fa fa-twitter" aria-hidden="true"></i></li>
									<li class="social__search"><i class="fa fa-share-alt" aria-hidden="true"></i></li>
								</ul>
							</div>
						</div>
						<div class="mol-post-format-4">
							<figure class="format-4__figure">
								<a href="">
									<img src="http://placehold.it/205x123" alt="">
								</a>
							</figure>
							<div class="format-4__detail">
								<ul class="detail__list">
									<li class="list-category">
										<a href="/tag">JUDICIALES</a>
									</li>
									<li class="list-date">
										<time>13:13</time>
									</li>
								</ul>
								<h2 class="detail__title">
									<a href="">Perú se convertirá en el segundo país en el mundo en certificar bonos de carbono en el sector ferroviario.</a>
								</h2>
								<ul class="detail__social">
									<li class="social__fb"><i class="fa fa-facebook" aria-hidden="true"></i></li>
									<li class="social__tw"><i class="fa fa-twitter" aria-hidden="true"></i></li>
									<li class="social__search"><i class="fa fa-share-alt" aria-hidden="true"></i></li>
								</ul>
							</div>
						</div>
						<div class="mol-post-format-4">
							<figure class="format-4__figure">
								<a href="">
									<img src="http://placehold.it/205x123" alt="">
								</a>
							</figure>
							<div class="format-4__detail">
								<ul class="detail__list">
									<li class="list-category">
										<a href="/tag">JUDICIALES</a>
									</li>
									<li class="list-date">
										<time>13:13</time>
									</li>
								</ul>
								<h2 class="detail__title">
									<a href="">Perú se convertirá en el segundo país en el mundo en certificar bonos de carbono en el sector ferroviario.</a>
								</h2>
								<ul class="detail__social">
									<li class="social__fb"><i class="fa fa-facebook" aria-hidden="true"></i></li>
									<li class="social__tw"><i class="fa fa-twitter" aria-hidden="true"></i></li>
									<li class="social__search"><i class="fa fa-share-alt" aria-hidden="true"></i></li>
								</ul>
							</div>
						</div>
						<div class="mol-post-format-4">
							<figure class="format-4__figure">
								<a href="">
									<img src="http://placehold.it/205x123" alt="">
								</a>
							</figure>
							<div class="format-4__detail">
								<ul class="detail__list">
									<li class="list-category">
										<a href="/tag">JUDICIALES</a>
									</li>
									<li class="list-date">
										<time>13:13</time>
									</li>
								</ul>
								<h2 class="detail__title">
									<a href="">Perú se convertirá en el segundo país en el mundo en certificar bonos de carbono en el sector ferroviario.</a>
								</h2>
								<ul class="detail__social">
									<li class="social__fb"><i class="fa fa-facebook" aria-hidden="true"></i></li>
									<li class="social__tw"><i class="fa fa-twitter" aria-hidden="true"></i></li>
									<li class="social__search"><i class="fa fa-share-alt" aria-hidden="true"></i></li>
								</ul>
							</div>
						</div>						
						<div class="mol-post-format-4">
							<figure class="format-4__figure">
								<a href="">
									<img src="http://placehold.it/205x123" alt="">
								</a>
							</figure>
							<div class="format-4__detail">
								<ul class="detail__list">
									<li class="list-category">
										<a href="/tag">JUDICIALES</a>
									</li>
									<li class="list-date">
										<time>13:13</time>
									</li>
								</ul>
								<h2 class="detail__title">
									<a href="">Perú se convertirá en el segundo país en el mundo en certificar bonos de carbono en el sector ferroviario.</a>
								</h2>
								<ul class="detail__social">
									<li class="social__fb"><i class="fa fa-facebook" aria-hidden="true"></i></li>
									<li class="social__tw"><i class="fa fa-twitter" aria-hidden="true"></i></li>
									<li class="social__search"><i class="fa fa-share-alt" aria-hidden="true"></i></li>
								</ul>
							</div>
						</div>
						<div class="mol-post-format-4">
							<figure class="format-4__figure">
								<a href="">
									<img src="http://placehold.it/205x123" alt="">
								</a>
							</figure>
							<div class="format-4__detail">
								<ul class="detail__list">
									<li class="list-category">
										<a href="/tag">JUDICIALES</a>
									</li>
									<li class="list-date">
										<time>13:13</time>
									</li>
								</ul>
								<h2 class="detail__title">
									<a href="">Perú se convertirá en el segundo país en el mundo en certificar bonos de carbono en el sector ferroviario.</a>
								</h2>
								<ul class="detail__social">
									<li class="social__fb"><i class="fa fa-facebook" aria-hidden="true"></i></li>
									<li class="social__tw"><i class="fa fa-twitter" aria-hidden="true"></i></li>
									<li class="social__search"><i class="fa fa-share-alt" aria-hidden="true"></i></li>
								</ul>
							</div>
						</div>

						<div class="mol-post-format-6">
							<div class="format-6__detail">
								<ul class="detail__list">
									<li class="list-category">
										<a href="/tag">VIDEO</a>
									</li>
									<li class="list-date">
										<time>13:13</time>
									</li>
								</ul>
								<h2 class="detail__title">
									<a href="">Asesino de Independencia disparó a quemarropa a cinco de sus víctimas.</a>
								</h2>
							</div>
							<figure class="format-6__figure">
								<a href="">
									<img src="http://placehold.it/380x231" alt="">
								</a>
							</figure>
						</div>

						<div class="mol-post-format-4">
							<figure class="format-4__figure">
								<a href="">
									<img src="http://placehold.it/205x123" alt="">
								</a>
							</figure>
							<div class="format-4__detail">
								<ul class="detail__list">
									<li class="list-category">
										<a href="/tag">JUDICIALES</a>
									</li>
									<li class="list-date">
										<time>13:13</time>
									</li>
								</ul>
								<h2 class="detail__title">
									<a href="">Perú se convertirá en el segundo país en el mundo en certificar bonos de carbono en el sector ferroviario.</a>
								</h2>
								<ul class="detail__social">
									<li class="social__fb"><i class="fa fa-facebook" aria-hidden="true"></i></li>
									<li class="social__tw"><i class="fa fa-twitter" aria-hidden="true"></i></li>
									<li class="social__search"><i class="fa fa-share-alt" aria-hidden="true"></i></li>
								</ul>
							</div>
						</div>
						<div class="mol-post-format-4">
							<figure class="format-4__figure">
								<a href="">
									<img src="http://placehold.it/205x123" alt="">
								</a>
							</figure>
							<div class="format-4__detail">
								<ul class="detail__list">
									<li class="list-category">
										<a href="/tag">JUDICIALES</a>
									</li>
									<li class="list-date">
										<time>13:13</time>
									</li>
								</ul>
								<h2 class="detail__title">
									<a href="">Perú se convertirá en el segundo país en el mundo en certificar bonos de carbono en el sector ferroviario.</a>
								</h2>
								<ul class="detail__social">
									<li class="social__fb"><i class="fa fa-facebook" aria-hidden="true"></i></li>
									<li class="social__tw"><i class="fa fa-twitter" aria-hidden="true"></i></li>
									<li class="social__search"><i class="fa fa-share-alt" aria-hidden="true"></i></li>
								</ul>
							</div>
						</div>
						<div class="mol-post-format-4">
							<figure class="format-4__figure">
								<a href="">
									<img src="http://placehold.it/205x123" alt="">
								</a>
							</figure>
							<div class="format-4__detail">
								<ul class="detail__list">
									<li class="list-category">
										<a href="/tag">JUDICIALES</a>
									</li>
									<li class="list-date">
										<time>13:13</time>
									</li>
								</ul>
								<h2 class="detail__title">
									<a href="">Perú se convertirá en el segundo país en el mundo en certificar bonos de carbono en el sector ferroviario.</a>
								</h2>
								<ul class="detail__social">
									<li class="social__fb"><i class="fa fa-facebook" aria-hidden="true"></i></li>
									<li class="social__tw"><i class="fa fa-twitter" aria-hidden="true"></i></li>
									<li class="social__search"><i class="fa fa-share-alt" aria-hidden="true"></i></li>
								</ul>
							</div>
						</div>
						<div class="mol-post-format-4">
							<figure class="format-4__figure">
								<a href="">
									<img src="http://placehold.it/205x123" alt="">
								</a>
							</figure>
							<div class="format-4__detail">
								<ul class="detail__list">
									<li class="list-category">
										<a href="/tag">JUDICIALES</a>
									</li>
									<li class="list-date">
										<time>13:13</time>
									</li>
								</ul>
								<h2 class="detail__title">
									<a href="">Perú se convertirá en el segundo país en el mundo en certificar bonos de carbono en el sector ferroviario.</a>
								</h2>
								<ul class="detail__social">
									<li class="social__fb"><i class="fa fa-facebook" aria-hidden="true"></i></li>
									<li class="social__tw"><i class="fa fa-twitter" aria-hidden="true"></i></li>
									<li class="social__search"><i class="fa fa-share-alt" aria-hidden="true"></i></li>
								</ul>
							</div>
						</div>						
						<div class="mol-post-format-4">
							<figure class="format-4__figure">
								<a href="">
									<img src="http://placehold.it/205x123" alt="">
								</a>
							</figure>
							<div class="format-4__detail">
								<ul class="detail__list">
									<li class="list-category">
										<a href="/tag">JUDICIALES</a>
									</li>
									<li class="list-date">
										<time>13:13</time>
									</li>
								</ul>
								<h2 class="detail__title">
									<a href="">Perú se convertirá en el segundo país en el mundo en certificar bonos de carbono en el sector ferroviario.</a>
								</h2>
								<ul class="detail__social">
									<li class="social__fb"><i class="fa fa-facebook" aria-hidden="true"></i></li>
									<li class="social__tw"><i class="fa fa-twitter" aria-hidden="true"></i></li>
									<li class="social__search"><i class="fa fa-share-alt" aria-hidden="true"></i></li>
								</ul>
							</div>
						</div>
						<div class="mol-post-format-4">
							<figure class="format-4__figure">
								<a href="">
									<img src="http://placehold.it/205x123" alt="">
								</a>
							</figure>
							<div class="format-4__detail">
								<ul class="detail__list">
									<li class="list-category">
										<a href="/tag">JUDICIALES</a>
									</li>
									<li class="list-date">
										<time>13:13</time>
									</li>
								</ul>
								<h2 class="detail__title">
									<a href="">Perú se convertirá en el segundo país en el mundo en certificar bonos de carbono en el sector ferroviario.</a>
								</h2>
								<ul class="detail__social">
									<li class="social__fb"><i class="fa fa-facebook" aria-hidden="true"></i></li>
									<li class="social__tw"><i class="fa fa-twitter" aria-hidden="true"></i></li>
									<li class="social__search"><i class="fa fa-share-alt" aria-hidden="true"></i></li>
								</ul>
							</div>
						</div>
					</section> 
				</div>

				<div class="col-4-md">
					<div class="org-section-common org-section-common--investigacion">
						<h3 class="common__title">
							INVESTIGACIÓN <span>Logo LR</span>	
						</h3>
						<div class="org-post-investigacion">
							<div class="format-1__item">
								<a href="">
									<figure>
										<img src="http://placehold.it/260x162" alt="">
									</figure>
									<h2>LAVA JATO</h2>
									<p>Investigación de corrupción en América Latina y Perú.</p>
								</a>
							</div>
						</div>										
					</div>

					<div class="org-section-common org-section-common--columnistas">
						<h3 class="common__title">
							COLUMNISTAS	
						</h3>
						<a href="#" class="columnistas__item">
							<figure class="columnistas__figure">
								<img src="http://placehold.it/65x65" alt="">
							</figure>
							<div class="colummnistas__detail">
								<h2 class="detail__autor">Mario Vargas Llosa</h2>
								<h3 class="detail__title">LAS SERIALES</h3>
							</div>		
						</a>
						<div class="columistas__more">
							<a href="/tag" class="more__link">TODOS LOS COLUMNISTAS</a>
						</div>
					</div>

					<div class="org-section-common org-section-common--videoground">
						<p>bloque por definir-slide</p>
					</div>

					<div class="advertising">
						<!-- <img src="http://placehold.it/300x250" alt=""> -->
						<img src="http://placehold.it/300x250" alt="">
					</div>

					
					<div class="org-section-common org-section-common--petShow">
						<p>jalar img del perrito</p>
					</div>

					<div class="org-section-common org-section-common--especiales">
						
					</div>

					<div class="org-section-common org-section-common--lacontra">
						<h3 class="common__logo">
							<a href="">logoLaContra</a>	
						</h3>
						<a href="#">
							<img src="http://placehold.it/300x202" alt="">
						</a>
						<h2 class="common__title">
							lissel Kruger: "Buscamos apoyar a personas con labio leporino y paladar hendido"
						</h2>
					</div>
					
					<div class="org-section-common org-section-common--origrama">
						<p>jalar img de organigrama</p>
					</div>

					<div class="org-section-common org-section-common--visitPeru">
						<figure>
							<a href="#">
								<img src="http://placehold.it/300x202" alt="">
							
							</a>
						</figure>
					</div>

					<div class="org-section-common org-section-common--carlincatura">
						<h3><a href="">CARLINCATURA</a></h3>
						<figure>
							<a href="">
								<img src="http://placehold.it/300x202" alt="">
							</a>
						</figure>
					</div>

					<div class="org-section-common org-section-common--reporteroCiudadano">
						<h3 class="common__title">
							<a href="#">Reportero Ciuadadano</a>							
						</h3>
						<div class="org-post-reporteroCiudadano">
							<div class="format-2__item">
								<a href="">
									<figure>
										<img src="http://placehold.it/125x77" alt="">
									</figure>
									<h2>
										Buses no recojen pasajeros en los paraderos de Villamaria del Triunfo.
									</h2>
								</a>
							</div>
						</div>


					</div>





				</div>

				<div class="col-3-md">



					
				</div>
			</div>



		</div>
	</main>

	<footer class="tem_Footer">		
	</footer>

	<script src="public/vendor/requirejs/require.min.js"></script>
	<script>
		requirejs(['public/assets/scripts/config.js'], function (common) {
				requirejs(['public/assets/scripts/pages/home/index.home.js']);
		});
	</script>
</body>
</html>



<!-- 	<header class="tem_Header"> 
		<nav class="mol-nav_Tag">
			<div class="cgrid-container">
				<h2 class="Tag__title">Temas</h2>						
				<ul class="Tag__list js_com_slick-Taglist">
					<li><a href="">new 1</a></li>
					<li><a href="">new 2</a></li>
					<li><a href="">new 3</a></li>
					<li><a href="">new 4</a></li>
					<li><a href="">new 5</a></li>
					<li><a href="">new 6</a></li>
					<li><a href="">new 7</a></li>
					<li><a href="">new 8</a></li>
					<li><a href="">new 9</a></li>
					<li><a href="">new 10</a></li>
				</ul>
			</div>		
		</nav>	
	</header> -->
