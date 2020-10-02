<?php $main_color = 'cyan darken-1' ?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rodando Express</title>
    <link rel="icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>
</head>
<body>
<?php include'header.php' ?>

<main class="main-container">
    <?php include 'sections/hero.php' ?>

    <?php include 'sections/video.php' ?>

    <?php include 'sections/vehiculos.php' ?>

    <?php include 'sections/convenios.php' ?>

    <?php include 'sections/contacto.php' ?>

    <?php include 'sections/aside.php' ?>

    <?php include 'footer.php' ?>
</main>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
</body>
</html>