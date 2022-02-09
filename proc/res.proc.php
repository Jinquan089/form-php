<?php

//echo $_POST['pokemon'];

if (isset($_POST['index']) && strtolower($_POST['pokemon'])=="pikachu") {
    session_start();
    $_SESSION['pantalla1']='check';
    header('Location: ../view/pantalla1.php');
} elseif (isset($_POST['index'])) {
    header('Location: ../index.php?msg=25');
} elseif (isset($_POST['pantalla1']) && strtolower($_POST['pokemon'])=="charmander") {
    session_start();
    $_SESSION['pantalla2']='check';
    header('Location: ../view/pantalla2.php');
} elseif (isset($_POST['pantalla1'])){
    header('Location: ../pantalla1.php?msg=3');
}