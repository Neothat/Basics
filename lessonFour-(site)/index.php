<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт сутдента GeekBrains</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="content">
<?php
	include "menu.php";
?>

	<h1>Личный сайт сутдента GeekBrains</h1>

	<div class="center">
	<img src="img/photo.jpg">
		<div class="box_text">

		<p><b>Добрый день.</b> Меня зовут <i>Волков Денис.</i>
		Я совсем недавно начал программировать,
		однако уже написал свой первый сайт.</p>

		<p>В этом мне помог IT-поратл <a href="https://geekbrains.ru/">GeekBrains.</a></p>

		<p>На этом сайте вы сможете сыграть в несколько игр, которые я написал:

		<a href="#">Главная</a>
		<a href="puzzle.html">Загадки</a>
		<a href="guess.html">Угадайка</a>
		<a href="guessCoop.html">Угадайка ко-оп</a>
		<a href="password.html">Генератор паролей</a>
		</p>
		</div>
	</div>		
</div>
<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Volkov Denis
</div>
</body>
</html>