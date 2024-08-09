<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio</title>
</head>
<body>
    
    <?php

    $AnoAtual = 2024;
    $AnodeNascimento = 2007;

    $idade = $AnoAtual - $AnodeNascimento;

    echo "Seu voto é: ".(($idade<18)? "Facultativo" : "Obrigatório");

    ?>

</body>
</html>