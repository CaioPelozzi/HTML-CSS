<?php

    $dbHost = 'formulario'
    $dbUsername = 'root'
    $dbPassword = '';
    $dbName = 'formulario-gustavo'

    $conexao = new mysqli( $dbHost, $dbUsername, $dbPassword,   $dbName)

    if($conexao->connect_errno)
    {
        echo "erro";
    }
    else
    {
        echo "Conexao efetuada com sucesso"
    }


?>