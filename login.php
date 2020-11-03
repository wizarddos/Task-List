<?php

	session_start();
	
	if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location: index.php');
		exit();
	}

	require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
		$login = $_POST['login'];
		$haslo = $_POST['haslo'];
		
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
	
		if ($rezultat = @$polaczenie->query(
		sprintf("SELECT * FROM uzytkownicy WHERE user='%s'",
		mysqli_real_escape_string($polaczenie,$login))))
		{
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0)
			{
				$wiersz = $rezultat->fetch_assoc();
				
				if (password_verify($haslo, $wiersz['haslo']))
				{
					$_SESSION['zalogowany'] = true;
					$_SESSION['id'] = $wiersz['id'];
                    $_SESSION['login'] = $wiersz['user'];
                    $_SESSION['title1'] = $wiersz['tittsk1'];
                    $_SESSION['task1'] = $wiersz['tsk1'];
                    $_SESSION['title2'] = $wiersz['tittsk2'];
                    $_SESSION['task2'] = $wiersz['tsk2'];
                    $_SESSION['title3'] = $wiersz['tittsk3'];
                    $_SESSION['task3'] = $wiersz['tsk3'];
                    $_SESSION['title4'] = $wiersz['tittsk4'];
                    $_SESSION['task4'] = $wiersz['tsk4'];
                    $_SESSION['title5'] = $wiersz['tittsk5'];
                    $_SESSION['task5'] = $wiersz['tsk5'];
					
					unset($_SESSION['blad']);
					$rezultat->free_result();
					header('Location: main.php');
				}
				else 
				{
					$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
					header('Location: index.php');
				}
				
			} else {
				
				$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
				header('Location: index.php');
				
			}
			
		}
		
		$polaczenie->close();
	}
	
?>