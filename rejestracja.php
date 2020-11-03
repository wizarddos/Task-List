<?php

	session_start();
	
	if (isset($_POST['login']))
	{
		//Udana walidacja? Załóżmy, że tak!
		$wszystko_OK=true;
		
		//Sprawdź poprawność nickname'a
		$nick = $_POST['login'];
		
		//Sprawdzenie długości nicka
		if ((strlen($nick)<3) || (strlen($nick)>20))
		{
			$wszystko_OK=false;
			$_SESSION['e_login']="Login musi posiadać od 3 do 20 znaków!";
		}
		
		if (ctype_alnum($nick)==false)
		{
			$wszystko_OK=false;
			$_SESSION['e_login']="Login może składać się tylko z liter i cyfr (bez polskich znaków)";
		}
		
		//Sprawdź poprawność hasła
		$haslo1 = $_POST['haslo1'];
		$haslo2 = $_POST['haslo2'];
		
		if ((strlen($haslo1)<8) || (strlen($haslo1)>20))
		{
			$wszystko_OK=false;
			$_SESSION['e_pass']="Hasło musi posiadać od 8 do 20 znaków!";
		}
		
		if ($haslo1!=$haslo2)
		{
			$wszystko_OK=false;
			$_SESSION['e_pass']="Podane hasła nie są identyczne!";
		}	

		$haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);
		
		//Czy zaakceptowano regulamin?
		if (!isset($_POST['regulamin']))
		{
			$wszystko_OK=false;
			$_SESSION['e_reg']="Potwierdź akceptację regulaminu!";
		}				
		
		
		require_once "connect.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
		
		try 
		{
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else
			{		

				//Czy nick jest już zarezerwowany?
				$rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE user='$nick'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_nickow = $rezultat->num_rows;
				if($ile_takich_nickow>0)
				{
					$wszystko_OK=false;
					$_SESSION['e_login']="Istnieje już gracz o takim nicku! Wybierz inny.";
				}
				
				if ($wszystko_OK==true)
				{
					//Hurra, wszystkie testy zaliczone, dodajemy gracza do bazy
					
					if ($polaczenie->query("INSERT INTO uzytkownicy VALUES (NULL, '$nick', '$haslo_hash', '', '', '', '', '', '', '', '', '', '')"))
					{
						$_SESSION['udanarejestracja']=true;
						header('Location: witamy.php');
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
					
				}
				
				$polaczenie->close();
			}
			
		}
		catch(Exception $e)
		{
			echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
			echo '<br />Informacja developerska: '.$e;
		}
		
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
	h2
	{
		text-align: center;
		
	}
	.error
	{
		color: red;
	}
	</style>
</head>
<body>
	<div id="container">
			<form method = "post">	
				<h2>Zarejestruj Się</h2>
				<input type = "text" name = "login" placeholder = "Nazwa Użytkownika"/>
				<?php
					if (isset($_SESSION['e_login']))
					{
						echo '<div class="error">'.$_SESSION['e_login'].'</div>';
						unset($_SESSION['e_login']);
					}
				?>
				<input type = "password" name = "haslo1" placeholder = "hasło"/>	
				<input type = "password" name = "haslo2" placeholder = "powtórz hasło"/>
				<?php
					if (isset($_SESSION['e_pass']))
					{
						echo '<div class="error">'.$_SESSION['e_pass'].'</div>';
						unset($_SESSION['e_pass']);
					}
				?>
				<label><input type = "checkbox" name = "regulamin"/>Akceptuję regulamin</label>
				<?php
					if (isset($_SESSION['e_reg']))
					{
						echo '<div class="error">'.$_SESSION['e_reg'].'</div>';
						unset($_SESSION['e_reg']);
					}
				?>	
				<input type = "submit" value = "zarejestruj się"/>		
			</form>

	</div>
</body>
</html>