<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт сутдента GeekBrains</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript">

		function checkLength(){
			var check = document.getElementById("lengthPassword").value;
			return parseInt(check);
		}

		function generatePassword(){
			var passwordLength = checkLength();
			var password = "";
    		var symbols = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!№;%:?*()_+=";
    		for (var i = 0; i < passwordLength; i++){
        	password += symbols.charAt(Math.floor(Math.random() * symbols.length));     
   			}
   			document.getElementById("password").innerHTML = password;
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
			
			<h1>Генератор паролей</h1>


			<div class="box">
				<p id="info">Какой длины вам нужен пароль?</p>
				<input type="text" id="lengthPassword">
				<br>
				<p id ="password"></p>
				<a href="#" onClick="generatePassword();" id= "button">Начать</a>

			</div>

		</div>
	</div>
</div>	

	
<div class="footer">
	Copyright &copy; <?php echo date("Y");?> < Volkov Denis
</div>
</body>
</html>