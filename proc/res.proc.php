<?php

//echo $_POST['pokemon'];

if (strtolower($_POST['pokemon'])=="pikachu") {
    header('Location: ../view/pantalla1.php');
} elseif (strtolower($_POST['pokemon'])=="charmander"){
    header('Location: ../view/pantalla2.php');
} else {
    header('Location: ../index.php?msg=25');
}