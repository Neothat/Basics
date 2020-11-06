<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт сутдента GeekBrains</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript">

		var answer = parseInt(Math.random() * 100);
		var tryCount = 0;
		var maxTryCount = 7;

		function readInt(id){
			var number = document.getElementById(id).value;
			return number;
		}

		function write(text){
			document.getElementById("info").innerHTML = text;
		}

		function write2(text){
			document.getElementById("info2").innerHTML = text;
		}

		function hide(id){
			document.getElementById(id).style.display = "none";
		}

		function end(text){
			write(text);
			hide("button");
			hide("userAnswerOne");
			hide("userAnswerTwo");
			hide("info2");
		}

		function guess(){
			tryCount++;

			var userAnswerOne = readInt("userAnswerOne");
			var userAnswerTwo = readInt("userAnswerTwo");

			if(userAnswerOne == 'q' || userAnswerOne == 'Q'){
			    end("Игра прервана");
			}

			if(userAnswerTwo == 'q' || userAnswerTwo == 'Q') {
			    end("Игра прервана");
			}

			userAnswerOne = parseInt(userAnswerOne);
			userAnswerTwo = parseInt(userAnswerTwo);

			if (userAnswerOne > answer) {
				write("Первый игрок ввел слишком большое число");
			} else if (userAnswerOne < answer) {
				write("Первый игрок ввел слишком маленькое число");
			}

			if (userAnswerTwo > answer) {
				write2("Второй ввел слишком большое число");
			} else if (userAnswerTwo < answer) {
				write2("Второй игрок ввел слишком маленькое число");
			}
			
			if(userAnswerOne == answer && userAnswerTwo == answer){
				end("Оба игрока угадали")
			} else if (userAnswerOne == answer) {
				end("Первый игрок угадал");
			} else if (userAnswerTwo == answer) {
				end("Второй игрок угадал");
			} else if (tryCount >= maxTryCount){
				write("Вы проирали <br> Правильный ответ: " + answer);
				hide("button");
				hide("userAnswerOne");
				hide("userAnswerTwo");
				hide("info2");
			}	
		}
	</script>
</head>
<body>

<div class="content">
	<?php
		include "menu.php";
	?>

<div class="contentWrap">
	<div class="content">
		<div class="center">
			
			<h1>Игра угадайка на двоих</h1>


			<div class="box">
				<p id="info">Добро пожаловать в ко-оп Угадай число!<br> Для прерывания игры введите q <br><br> Первый игрок, угадайте число от о до 100</p> 
				<input type="text" id="userAnswerOne">
				<p id="info2">Второй игрок, угадайте число от о до 100</p>
				<input type="text" id="userAnswerTwo">
				<br>

				<a href="#" onClick="guess();" id= "button">Начать</a>

			</div>

		</div>
	</div>
</div>	

	
<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Volkov Denis
</div>
</body>
</html>