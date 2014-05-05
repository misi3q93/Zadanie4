<?php
    session_start();
    if(empty($_SESSION['users'])) 
    {
        $_SESSION['users'] = array(
            '1' => array('Jan', 'Nowak'),
            '2' => array('Franciszek', 'Cuda'),
            '3' => array('Zdzisław', 'Malina'),
            '4' => array('Hans', 'Kloss'),   
            );
        $_SESSION['view'] = array(
            '1' => array('','21-02-2014', '20-05-2014', '14-04-2014'),
            '2' => array('','20-05-2014', '25-09-2013'),
            '3' => array('','14-04-2014'),
            '4' => array('','14-04-2014', '15-04-2014', '20-05-2014', '17-04-2014'),
            );
    }
?>
<!DOCTYPE html> 
<html lang="pl">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Dzienniczek</title>
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/style.css" />
        <script src="js/skrypt.js"></script>
    </head>
    <body>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-brand">Dzienniczek</div>
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse navHeaderCollapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="index.php">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pokaż <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="?page=pokaz-ucznia">Ucznia</a></li>
                                <li><a href="?page=pokaz-obecnosci">Obecności</a></li>
                            </ul>
                        </li> 
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dodaj <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="?page=dodaj-ucznia">Ucznia</a></li>
                                <li><a href="?page=dodaj-obecnosci">Obecności</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <?php
            if(isset($_GET['page'])) $page = $_GET['page'];
            else $page = 'main';
            if(is_file($page.'.php') && ($page!='index')) include $page.'.php';
            else echo "<div class=\"container\"><div class=\"row\"><div class=\"col-sm-12\">Brak takiej strony.</div></div></div>";
        ?>
        <script src="http://code.jquery.com/jquery-1.11.0.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>