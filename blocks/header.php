<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <?php 
    $title = "Аверкова Карина 211-361 ЛР № 9";
    ?>
    <title><?php echo($title);?></title>
    
</head>

<body>   
<script>
    onload = function () {
    for (var lnk = document.links, j = 0; j < lnk.length; j++)
        if (lnk [j].href == document.URL & lnk[j].className != "header__logo") 
            
            lnk [j].style.cssText = 'opacity: 1;border-bottom: 2px solid #000;';

    }
</script>
 

    <section class="section">
        <div class="container">
            <header class="header">

                <a class="header__logo" href="index.php">
                    <img class="header__logo-img" src="img\polyteh.png" alt="">
                </a>

                <p>Аверкова Карина 211-361 ЛР №9 Вариант 1</p>


                <nav class="nav">
                    <!-- <?php 
                        $a = array('A', 'B', 'C', 'D', 'E');
                        for ($i = 0; $i < 4; $i++) {

                        }    

                    ?> -->

                    <a class="nav__link" href="index.php">Главная</a>
                    <a class="nav__link" href="#">Контакты</a>
                    <a class="nav__link" href="feedback.php">Обратная связь</a>                    
                </nav>

                <a class="login-button" href="auth.php">Войти</a>

            </header>