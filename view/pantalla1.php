<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recogida de datos</title>
</head>
<body>
    <h1>Mostrar datos del formulario</h1>
    <h1>Formulario para enviar datos</h1>
    <form action="../index.php" method="post">
        <input type="text" name="pokemon" placeholder="Inserte pokemon...">
        <input type="submit" name="screen1">
    </form>
    <?php
        session_start();
        if (!($_SESSION["pantalla1"]=='check')) {
            header("Location: ../index.php");
        }
        if (isset($_GET['msg'])) {
        echo '<p class="msg">Intenta con el pokemon #'.$_GET['msg'].'</p>';
        }
    //Codigo
    
    ?>
</body>
</html>