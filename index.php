<?php
	session_start();
	if ((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany'] == true))
	{
		header('Location: main.php');
		exit();
	}
?>
<!DOCTYPE HTML>
<html lang = "pl">

<head>
	<meta charset = "UTF-8"/>
	<title>Lista zadań - zaloguj się</title>
	<link rel = "stylesheet" href = "style.css"></link>
	<style>
	input[type=text]:focus,
	input[type=password]:focus
	{
		color: #000;
	}
	</style>
</head>
<body>
	<div id="container">
			<form method = "post" action = "login.php">

				<h2>Zaloguj się</h2>
				
				<input type="text" placeholder="login" onfocus="this.placeholder=''" onblur="this.placeholder='login'" name = "login">
				
				<input type="password" placeholder="hasło" onfocus="this.placeholder=''" onblur="this.placeholder='hasło'" name = "haslo" >
				
				<input type="submit" value="Zaloguj się">
				<?php
				if(isset($_SESSION['blad'])) 
				{
					echo $_SESSION['blad'];
				}
				?>
				<br />
				<a href = "rejestracja.php">Nie masz konta? Zarejestruj się</a>
			</form>

	</div>
</body>
</html>