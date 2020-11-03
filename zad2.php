<?php session_start();
    if (isset($_SESSION['login']) == false)
    {
        header("Location: index.php");
        exit();
    }
    $tytul1 = $_SESSION["title1"];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8"/>
        <title>Lista zadań - strona główna</title>
        <link rel = "stylesheet" href = "style.css"></link>
        
        <style>
            #container2
            {
                background-color: white;
                width: 100%;
                height: 100%;
                margin-left: auto;
                margin-right: auto;
                margin-top: 100px;
                color:#000;
                font-family: Georgia, 'Times New Roman', Times, serif;
                
                
                -webkit-box-shadow: 3px 3px 30px 5px rgba(204,204,204,0.9);
                -moz-box-shadow: 3px 3px 30px 5px rgba(204,204,204,0.9);
                box-shadow: 3px 3px 30px 5px rgba(204,204,204,0.9);
            }
            .hyplink
            {
                color: #111;
                text-decoration: none;
            }
            header{text-align:center;}
            #nav
            {
                width: 20%;
                height: 414px;
                float: left;
                background-color: #454545;
                list-style-type: none;
            }
            #content
            {
                width: 80%;
                min-height: 414px;
                float: left;
                background-color: #B8D4E3;
                color: #545C52;
            }
            a
            {
                color: #B0DB43;
                text-decoration: none;
            }
            #footer
            {
                width: 100%;
                text-align: center;
                clear: both;
            }
            input[type=submit]
            {
                border-radius: 30px;
                width: 300px;
                height: 50px;
                margin-top: 50px;
                margin-left: 25%;
                background: #454545;
                color: #B0DB43;
            }

            input[type=submit]:hover
            {
                background: #343434;
            }
            textarea
            {
                margin-left: 20%;
                width: 400px;
                height: 200px;
            }
            input[type=textarea]
            {
                margin-left: 20%;
                background-color: #fff;
            }
            label{
                margin-left: 20%;
            }
            #del{
                background-color: #ff0000;
                color: #D2E0BF;
            }
        
        </style>
    </head>
    <body>
        <div id = "container2">
            <header>
                <h1>Witaj: <?php echo $_SESSION["login"]?>!</h1>
                <h4><a class = "hyplink" href = "wyloguj.php">wyloguj się</a></h4>
            </header>
            <content>
                 <div id = "nav">
                        <ul>
                        <li><a href = "zad1.php">
                            <?php 
                                if($_SESSION['title1'] != ''){echo $_SESSION["title1"];}
                                else {echo "dodaj zadanie";}
                            ?>
                            </a></li>
                            <li><a href = "zad2.php"><?php 
                                if($_SESSION['title2'] != ''){echo $_SESSION["title2"];}
                                else {echo "dodaj zadanie";}
                            ?></a></li>
                            <li><a href = "zad3.php"><?php 
                                if($_SESSION['title3'] != ''){echo $_SESSION["title3"];}
                                else {echo "dodaj zadanie";}
                            ?></a></li>
                            <li><a href = "zad4.php"><?php 
                                if($_SESSION['title4'] != ''){echo $_SESSION["title4"];}
                                else {echo "dodaj zadanie";}
                            ?></a></li>
                            <li><a href = "zad5.php"><?php 
                                if($_SESSION['title5'] != ''){echo $_SESSION["title5"];}
                                else {echo "dodaj zadanie";}
                            ?></a></li>
                            <li><a href = "main.php">Strona Główna</a></li>
                        </ul>
                 </div>
                 <div id = "content">
                 <?php
                        if ($_SESSION['task2'] == '')
                        {
                            echo<<<END
                                <div id = "add">
                                    <form method = "post" action = "addzad.php">
                                            <label>tytuł<br /><input type = "textarea" name = "title" required/></label>
                                            <br/>
                                            <textarea name = "tresc" placeholder = "tutaj treść zadania" maxlength = "900"></textarea>
                                            <br />
                                            <input type = "submit" value = "dodaj zadanie"/>
                                            <br />
                                            <input type = "hidden" value = "2" name = "ktory"/>
                                    </form>
                                </div>
                            END;
                        }
                        else
                        {
                            echo  $_SESSION['task2'];
                            echo<<<END
                                <br/>
                                <form method = "post" action = "del.php">
                                    <input type = "submit" id = "del" value = "Usuń Zadanie"/>
                                    <input type = "hidden" name = "ktory" value = "2"/>
                                </form>
                            END;
                            
                        
                        }
                    ?>
                   
                 </div>
            </content>
            <footer>
                    <div id = "footer">Zadania.com &copy wszelkie przwa zastrzeżone</div>
            </footer>
        </div>
    </body>
</html>
