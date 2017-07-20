<?php require_once('config.php'); ?>
<?php header("Content-Type: text/html; charset=utf-8"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
    <head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8" />
        <title>Legendary Fine | Главная страница</title>
        <link rel="stylesheet" type="text/css" href="style.css"></style>
		<script>
			$(function(){
				if($('.nav>ul>li').hasClass('selected')){
					$('.selected').addClass('active');
					var currentleft=$('.selected').position().left+"px";
					var currentwidth=$('.selected').css('width');
					$('.lamp').css({"left":currentleft,"width":currentwidth});
				}
				else{
					$('.nav>ul>li').first().addClass('active');
					var currentleft=$('.active').position().left+"px";
					var currentwidth=$('.active').css('width');
					$('.lamp').css({"left":currentleft,"width":currentwidth});
				}
				$('.nav>ul>li').hover(function(){
					$('.nav ul li').removeClass('active');
					$(this).addClass('active');
					var currentleft=$('.active').position().left+"px";
					var currentwidth=$('.active').css('width');
					$('.lamp').css({"left":currentleft,"width":currentwidth});
				},function(){
					if($('.nav>ul>li').hasClass('selected')){
						$('.selected').addClass('active');
						var currentleft=$('.selected').position().left+"px";
						var currentwidth=$('.selected').css('width');
						$('.lamp').css({"left":currentleft,"width":currentwidth});
					}
					else{
						$('.nav>ul>li').first().addClass('active');
						var currentleft=$('.active').position().left+"px";
						var currentwidth=$('.active').css('width');
						$('.lamp').css({"left":currentleft,"width":currentwidth});
					}
				});
			});
		</script>
    </head>
    <body style="background-image: url(img/bg.jpg)">       
			<div class='nav'>
				<ul>
					<li><a href='index.php'>Главная</a></li>
					<li><a>Об игре</a>
						<ul>
							<li><a href='heroes.php'>О героях</a></li>
							<li><a href='world.php'>О мире</a></li>
							<!--<li><a href='monsters.php'>О монстрах</a></li>-->
						</ul>
					</li>
					<li><a href='help.php'>Помощь разработчикам</a></li>
					<li><a href='about.php'>О нас</a></li>
					<!--<li><a href='in_the_plans.php'>В планах</a></li>-->
					<li><a href='download.php'>Скачать</a></li>
					<!--<li><a href='game.php'>Играть</a></li>-->
					<li class='lamp'><span></span></li>
				</ul>

		<div class="page">

			<div class="right">
				<center>
					<h3>Авторизация</h3>
				</center>
				<hr />
				<form action="auth.php" method="POST">
					Логин:  <input type="text" name="log" size="11"></br>
					Пароль: <input type="password" name="pass" size="11"></br>
					<input type="submit" value="вход">
					<a href="reg.php"> <input type="button" value="Регистрация" ></a>
				</form>
</br>
				<center>
					<h3>Об игре</h3>
				</center>
				<hr />
				<center>
					<a href="heroes.php"><img src="img/hero.png" height="150px" width="95px"></br>О героях</a><br>
					<a href="world.php"><img src="img/world.png" height="150px" width="150px"></br>О мире</a><br>
					<!--<a href="monsters.php">О монстрах</a><br>-->
				</center>
			</div>
			<div class="content">
