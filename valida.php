<?php

$login = $_POST["email"];
$senha = $_POST["matricula"];

$mensagem = "<span class = Login realizado com sucesso!><b>Login realizado com sucesso!:.$login.</span>";

    if($login == "dra.martasantana@hotmail.com" && $senha == "1913961396"){

        echo "$mensagem";

    }
    
    else{

        header('location:index.php?erro=1');
            
    }
?>