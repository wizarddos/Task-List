<?php
    session_start();
    $tytul = $_POST['title'];
    $tresc = $_POST['tresc'];
    $ktore_zadanie = $_POST['ktory'];
    $id = $_SESSION['id'];

    $tytul = htmlentities($tytul, ENT-QUOTES, "UTF-8");
    $tresc = htmlentities($tresc, ENT-QUOTES, "UTF-8");

    require_once "connect.php";
    try
    {
        $polaczenie = new mysqli($host,$db_user,$db_password,$db_name);
        if ($polaczenie->connect_errno!=0)
	    {
			throw new Exception(mysqli_connect_errno());
		}
        else
        { 
            if($ktore_zadanie == 1)
            {
                if ($polaczenie->query("UPDATE uzytkownicy SET tittsk1 = '$tytul', tsk1 = '$tresc' WHERE id = '$id'"))
                {
                    if($rezultat = @$polaczenie->query(
                        sprintf("SELECT * FROM uzytkownicy WHERE id='%s'",
                        mysqli_real_escape_string($polaczenie,$id))))
                    {
                        $wiersz = $rezultat->fetch_assoc();
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
                        header("Location: dodano.php");
                    }
                    else{throw new Exception($polaczenie->error);}
                }
                else{throw new Exception($polaczenie->error);}
            }
            else if($ktore_zadanie == 2)
            {
                if ($polaczenie->query("UPDATE uzytkownicy SET tittsk2 = '$tytul', tsk2 = '$tresc' WHERE id = '$id'"))
                {
                    if($rezultat = @$polaczenie->query(
                        sprintf("SELECT * FROM uzytkownicy WHERE id='%s'",
                        mysqli_real_escape_string($polaczenie,$id))))
                    {
                        $wiersz = $rezultat->fetch_assoc();
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
                        header("Location: dodano.php");
                    }
                    else
                    {throw new Exception($polaczenie->error);}
                }
                else
                {throw new Exception($polaczenie->error);}
            }
            else if($ktore_zadanie == 3)
            {
                if ($polaczenie->query("UPDATE uzytkownicy SET tittsk3 = '$tytul', tsk3 = '$tresc' WHERE id = '$id'"))
                { 
                    if($rezultat = @$polaczenie->query(
                        sprintf("SELECT * FROM uzytkownicy WHERE id='%s'",
                        mysqli_real_escape_string($polaczenie,$id))))
                    {
                        $wiersz = $rezultat->fetch_assoc();
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
                        header("Location: dodano.php");
                    }
                    else{throw new Exception($polaczenie->error);}
                }
                else{throw new Exception($polaczenie->error);}
            }
            else if($ktore_zadanie == 4)
            {
                    
                if ($polaczenie->query("UPDATE uzytkownicy SET tittsk4 = '$tytul', tsk4 = '$tresc' WHERE id = '$id'"))
                { 
                    if($rezultat = @$polaczenie->query(
                        sprintf("SELECT * FROM uzytkownicy WHERE id='%s'",
                        mysqli_real_escape_string($polaczenie,$id))))
                    {
                        $wiersz = $rezultat->fetch_assoc();
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
                        header("Location: dodano.php");
                    }
                    else{throw new Exception($polaczenie->error);}
                }
                else{throw new Exception($polaczenie->error);}
            }
            else if($ktore_zadanie == 5)
            {
                if ($polaczenie->query("UPDATE uzytkownicy SET tittsk5 = '$tytul', tsk5 = '$tresc' WHERE id = '$id'"))
                { 
                    if($rezultat = @$polaczenie->query(
                        sprintf("SELECT * FROM uzytkownicy WHERE id='%s'",
                        mysqli_real_escape_string($polaczenie,$id))))
                    {
                        $wiersz = $rezultat->fetch_assoc();
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
                        header("Location: dodano.php");
                    }
                    else{throw new Exception($polaczenie->error);}
                }
                else{throw new Exception($polaczenie->error);}
            }
           $polaczenie->close();
        }
    }
    catch(Exception $e)
    {
        echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
		echo '<br />Informacja developerska: '.$e;
    }


?>