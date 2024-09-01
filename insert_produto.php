<?php
    $server = "localhost";
    $user = "root";
    $password = "root";
    $database = "bd_loja";

    $conexao = new mysqli($server, $user, $password, $database);

    $insert = "INSERT INTO tb_produto
    VALUES (null, 'Controle', 'Controle de videogame', 500.00, 'Qualquer coisa produto'),
    (null, 'Microfone', 'Microfone Geladeira Tsunami', 800.00, 'Qualquer coisa produto'),
    (null, 'Mouse', 'Mouse que vira um rato', 1500.00, 'Qualquer coisa produto')";

    $conexao->query($insert);
?>