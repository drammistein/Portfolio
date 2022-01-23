<?php
    $login = filter_input(INPUT_POST, 'login');
    $password = filter_input(INPUT_POST, 'password');

    if(($login == 'teste') && ($password == 123)) {
        header('Location: home.php');
    } else {
        header('Location: form.php');
        exit;
        
    }
?>