<?php
session_start();
$ktore_zadanie = $_POST['ktory'];
$id = $_SESSION['id'];

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
        if($rezultat = $polaczenie->query("SELECT * FROM uzytkownicy WHERE id = '$id'")) 
        { 
            $wiersz = $rezultat->fetch_assoc();
            if($ktore_zadanie == 1)
            {
                if ($polaczenie->query("UPDATE uzytkownicy SET tittsk1 = '', tsk1 = '' WHERE id = '$id'"))
                { 
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
                    header("Location: usunieto.php");}
                else{throw new Exception($polaczenie->error);}
            }
            else if($ktore_zadanie == 2)
            {
                if ($polaczenie->query("UPDATE uzytkownicy SET tittsk2 = '', tsk2 = '' WHERE id = '$id'"))
                { 
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
                    header("Location: usunieto.php");}
                else{throw new Exception($polaczenie->error);}
            }
            else if($ktore_zadanie == 3)
            {
                if ($polaczenie->query("UPDATE uzytkownicy SET tittsk3 = '', tsk3 = '' WHERE id = '$id'"))
                { 
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
                    header("Location: usunieto.php");}
                else{throw new Exception($polaczenie->error);}
            }  
            else if($ktore_zadanie == 4)
            {
                if ($polaczenie->query("UPDATE uzytkownicy SET tittsk4 = '', tsk4 = '' WHERE id = '$id'"))
                { 
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
                    header("Location: usunieto.php");}
                else{throw new Exception($polaczenie->error);}
            }
            else if($ktore_zadanie == 5)
            {
                if ($polaczenie->query("UPDATE uzytkownicy SET tittsk5 = '', tsk5 = '' WHERE id = '$id'"))
                { 
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
                    header("Location: usunieto.php");}
                else{throw new Exception($polaczenie->error);}
            }
        }
        else{throw new Exception($polaczenie->error);}
        $polaczenie->close();
    }
}
catch(Exception $e)
{
    echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
    echo '<br />Informacja developerska: '.$e;
}

