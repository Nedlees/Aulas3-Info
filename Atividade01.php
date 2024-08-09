<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 01 Php</title>
</head>
<body>
    
    <?php

    $nota1 = 3;

    $nota2 = 4;

    $media = ($nota1 + $nota2) /2;

    echo "A média entre ".$nota1." e ".$nota2." é ".$media."<br>"; 
    echo "A situação do aluno é ".(($media < 6)? "Aprovado" : "Reprovado");

    ?>

</body>
</html>