<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт сутдента GeekBrains</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript">

		var score = 0;

		function checkAnswer(inputId, answers){
			var userAnswer = document.getElementById(inputId).value;
			userAnswer = userAnswer.toLowerCase();
			for (var i = 0; i < answers.length; i++) {
				if (userAnswer == answers[i]){
					score++;
					break;
				}
			}
		}

		function checkAnswers(){
			checkAnswer("userAnswer1", ["сухих"]);
			checkAnswer("userAnswer2", ["карусель", "на карусели"]);
			checkAnswer("userAnswer3", ["имя", "фамилия"]);
			checkAnswer("userAnswer4", ["яма", "ямка"]);

			alert("Вы отгадали " + score + " загадок");
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
			
			<h1>Игра в загадки</h1>

			<div class="box">
				
				<p>Каких камней не бывает в речке?</p>
				<input type="text" id="userAnswer1">

				<p>Вы сидите в самолете, впереди вас лошадь, сзади автомобиль. Где вы находитесь?</p>
				<input type="text" id="userAnswer2">

				<p>Что принадлежит вам, однако другие этим пользуются чаще, чем вы сами?</p>
				<input type="text" id="userAnswer3">

				<p>Чем больше из нее берешь, тем больше она становиться. Что это?</p>
				<input type="text" id="userAnswer4">

				<br>

				<a href="#" onclick="checkAnswers();">Ответить</a>

			</div>

		</div>
	</div>
</div>	

	
<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Volkov Denis
</div>
</body>
</html>