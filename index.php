<?php
defined('_JEXEC') or die;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="theme-color" content="#283c44"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"/>
		<meta name="HandheldFriendly" content="true" />
		<meta name="apple-mobile-web-app-capable" content="YES" />
		<link rel="stylesheet" href="templates/mojcms/css/font.css">
		
		<jdoc:include type="head" />
		<script src="templates/mojcms/js/Tmpl.js" type="text/javascript"></script>
		<link rel="stylesheet" href="templates/mojcms/css/style.css">
	</head>
	<body>
		<header>
			<div class="top">
				<div class="center flexBlock">
					<p>TECHNIKUM INFORMATYCZNE W RABCE ZDROJU</p>
					<ul class="flexBlock">
						<li class="address">Rabka Zdrój, ul. XYZ</li>
						<li class="phone">
							<a href="tel:48123456789">+48 123 456 789</a>
						</li>
					</ul>
				</div>
			</div>
			
			<div class="bottom center flexBlock">
				<div class="leftBlock">
					<a href="/" class="logo changeInline">
						<img src="templates/mojcms/images/logo/logo.png" alt="" title="TECHNIKUM INFORMATYCZNE W RABCE ZDROJU"/>
					</a>
					<ul class="changeInline flexBlock">
						<li>
							<a href="#fb" class="fb">
								<img src="templates/mojcms/images/icons/facebook.png"/>
							</a>
						</li>
						<li>
							<a href="#snap">
								<img src="templates/mojcms/images/icons/snapchat.png"/>
							</a>
						</li>
						<li>
							<a href="#twitter">
								<img src="templates/mojcms/images/icons/twitter.png"/>
							</a>
						</li>
					</ul>
				</div>
				
				<nav>
					<a href="#mobile" onClick="Mojobiekt.mobilemenu()" class="mobileMenu">Menu <strong></strong></a>
					<jdoc:include type="modules" name="menu" />
					<strong onClick="Mojobiekt.mobilemenu()" class="shadow mobileMenu"></strong>
				</nav>
			</div>
			
		</header>
		<section>
			<?php /*<div class="slider center flexBlock">
				<div class="tekst">
					<h1>Lorem ipsum dolor sit amet, <span>consectetur adip</span></h1>
					<p>Maecenas sollicitudin, mauris nec lobortis molestie, sapien enim tristique leo, vitae mollis neque nunc nec justo. Maecenas rhoncus massa nec luctus sagittis.</p>
					<a href="#">zobacz więcej</a>
				</div>
			</div>*/ ?>
			<jdoc:include type="modules" name="elementTop" />
			<?php/*<div class="aboutus center flexBlock">
				<div class="leftBlock">
					<a href="#aboutus" class="flexBlock">
						<strong> zobacz prezentację</strong>
					</a>
				</div>
				<div class="rightBlock flexBlock">
					<div>
						<h2 class="headerBoxText flexBlock">
							<strong>Oferta Szkoły</strong>
						</h2>
						<p>Ut egestas lobortis tellus a maximus. Maecenas eu venenatis orci. Curabitur est ex, iaculis id lacus quis, feugiat sagittis enim. Vivamus vel nisi ipsum. </p>
						<p>Fusce tempus mauris enim, eget malesuada tellus iaculis a. Sed tempor, lacus et hendrerit vulputate, turpis justo laoreet purus, et volutpat sem ipsum rhoncus mi.</p>
						<div class="aligneRight"><a href="#">zobacz więcej</a></div>
					</div>
				</div>
			</div>*/?>
			<jdoc:include type="modules" name="aboutus" />
			
				<?php /*<ul class="offerBox center flexBlock aligneCenter">
					<li>
						<a href="#"class="flexBlock">
							<strong class="single">
								<img src="templates/mojcms/images/icons/security.png" alt="" />
								<strong class="text">
									Specjalista<strong>ds. zabezpieczeń</strong>
								</strong>
							</strong>
						</a>
					</li>
					<li>
						<a href="#"class="flexBlock">
							<strong class="single">
								<img src="templates/mojcms/images/icons/vector.png" alt="" />
								<strong class="text">
									Specjalista<strong>grafik designer</strong>
								</strong>
							</strong>
						</a>
					</li>
					<li>
						<a href="#"class="flexBlock">
							<strong class="single">
								<img src="templates/mojcms/images/icons/tools.png" alt="" />
								<strong class="text">
									Specjalista<strong>ds. hardware</strong>
								</strong>
							</strong>
						</a>
					</li>
					<li>
						<a href="#"class="flexBlock">
							<strong class="single">
								<img src="templates/mojcms/images/icons/html.png" alt="" />
								<strong class="text">
									Specjalista<strong>ds. programowania</strong>
								</strong>
							</strong>
						</a>
					</li>
				</ul>*/?>
				<jdoc:include type="modules" name="offerBox" />
				<?php /*<div class="schoolBox">
					<div class="top">
						<div class="leftBlock ">
							<div class="bottomLine center ">
								<h2 class="headerBoxText flexBlock">
									<strong>O TECHNIKUM</strong>
								</h2>
						
								<p>Ut egestas lobortis tellus a maximus. Maecenas eu venenatis orci.
								Curabitur est ex, iaculis id lacus quis, feugiat sagittis enim. Vivamus
								vel nisi ipsum.<strong> Mauris elementum finibus quam.</strong></p>
								
							</div>
						</div>
					
						<div class="rightBlock">
						
						</div>
					</div>
					<div class="bottom center">
						<div class="width50">
							<p>
								Vestibulum eu vehicula mi. Nulla non quam venenatis, rhoncus
								urna non, vulputate lacus. Donec vel felis malesuada, congue neque
								ac, porta lacus.
							</p>
						</div>
					</div>
				</div>*/?>
				<jdoc:include type="modules" name="schoolBox" />
				<?php/*
				<div class="infoBox center">
				<h2 class="headerBoxText flexBlock">
					<strong>AKTUALNOŚCI</strong>
				</h2>
				<div class="flexBlock">
					<div class="leftBlock">
						<div class="image">
							<a href="#aboutus" class="flexBlock">
								<div class="span"><strong>AKTUALNOŚCI</strong>
								<h3>LOREM IPSUM DOLOR SIT</h3></div>
							</a>
						</div>	
						<div class="info"> Cras risus elit, interdum non ligula et, commodo maximus ex. Donec nec sapien vitae nunc fringilla porta id quis purus.</div>
						<div class="aligneCenter"><a href="#" class="cos">zobacz więcej</a></div>
					</div>
					<div class="leftBlock">
						<div class="image">
							<a href="#aboutus" class="flexBlock">
								<div class="span"><strong>AKTUALNOŚCI</strong>
								<h3>LOREM IPSUM DOLOR SIT</h3></div>
							</a>
						</div>	
						<div class="info"> Cras risus elit, interdum non ligula et, commodo maximus ex. Donec nec sapien vitae nunc fringilla porta id quis purus.</div>
						<div class="aligneCenter"><a href="#" class="cos">zobacz więcej</a></div>
					</div>
					<div class="leftBlock">
						<div class="image">
							<a href="#aboutus" class="flexBlock">
								<div class="span"><strong>AKTUALNOŚCI</strong>
								<h3>LOREM IPSUM DOLOR SIT</h3></div>
							</a>
						</div>	
						<div class="info">Cras risus elit, interdum non ligula et, commodo maximus ex. Donec nec sapien vitae nunc fringilla porta id quis purus.</div>
						<div class="aligneCenter"><a href="#" class="cos">zobacz więcej</a></div>
					</div>
				</div>
			</div>*/?>
				<jdoc:include type="modules" name="infoBox" />
		</section>
		<div class="stopka flexBlock">
		
			<div class="copyright center flexBlock">
				<div class="leftBlock flexBlock">
					<ul class="changeInline flexBlock">
						<li>
							<a href="#fb" class="fb">
								<img src="templates/mojcms/images/icons/facebook.png"/>
							</a>
						</li>
						<li>
							<a href="#snap">
								<img src="templates/mojcms/images/icons/snapchat.png"/>
							</a>
						</li>
						<li>
							<a href="#twitter">
								<img src="templates/mojcms/images/icons/twitter.png"/>
							</a>
						</li>
					</ul>
				</div>
			<span class="aligneCenter">Wszystkie prawa zastrzeżone © Technikum Informatyczne Rabka-Zdrój 2017<br/>
	Projekt:       <strong><a href="http://e-start.com.pl/" target="_Blank">Michał Ryt</a></strong>    Realizacja:   <strong><a href="#">Kacper Maćkowiak</a></strong></span>
			</div>
		</div>
		
		<!--
		<form action="" method="post" required>
			<input type="text" placeholder="Wprowadź imie1" name="imię"/>
			<input type="number" placeholder="Wprowadź imie2" />
			<input type="email" placeholder="Wprowadź imie3" />
			<input type="text" placeholder="Wprowadź imie4" />
			<input type="submit" placeholder="Wprowadź imie5"/>
			<textarea name="textForm" placeholder="Wpisz słowo"></textarea>
			<button type="submit"> </button>
			password
			number
			email
			reset
			hidden
			submit
		</form>
		!-->
		
		
		
		<script type="text/javascript">
			//Mojobiekt.mojametoda();
		</script>
	</body>
</html>
