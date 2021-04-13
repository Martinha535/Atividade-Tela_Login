<?php

    $ email = $_POST ["email"];
    $ senha = $_POST ["senha];

    if ($ email ! == "dra.martasantana@hotmail.com" && $ password ! == "1913961396") {
        header ('location:index.php? erro=1');
    };

    echo '<h1> Login realizado com sucesso!</h1>'

?>