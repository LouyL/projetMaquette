<?php
session_start();

if(isset($_POST['login']) && isset($_POST['pass'])) {
    if($_POST['login'] === "admin" && $_POST['pass'] === 'adminmdp') {
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['pass'] = $_POST['pass'];
        header('Location: admin_index.php');
    } else {
        echo "Désolé, les identifiants de connection ne correspondent pas.";
        header('Location: index.php');
    }
} else {
    echo "Désolé mais toutes les information n'ont pas était remplie";
}

?>