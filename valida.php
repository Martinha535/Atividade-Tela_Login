<?php

    $login = $_POST["email"];
    $senha = $_POST["matricula"];

    if($login == "dra.martasantana@hotmail.com" && $senha == "1913961396") {
        header('location:index.php?erro=1');
    };

    echo'<h1> Login realizado com sucesso!</h1>'

?>