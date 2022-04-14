<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
    <link rel="shortcut icon" href="calc.png" type="image/x-icon">
</head>
<body>
    <h1>Atividade 1</h1>
    <h3>Calcular média</h3>
    <?php
        $nome = "Frederico";
        $ra = "320107000";
        $nota1 = 8.0;
        $nota2 = 6.0;
        $nota3 = 3.0;

        $media = ($nota1 + $nota2 + $nota3) / 3.0;
        $media = number_format($media, 1, '.', ',');

        $media >= 6 ? ($situacao = "Aprovado") : ($situacao = "Reprovado");

        echo "<b>Aluno:</b> $nome";
        echo "<br><b>RA:</b> $ra";
        echo "<br><br><b>Nota 1:</b> $nota1";
        echo "<br><b>Nota 2:</b> $nota2";
        echo "<br><b>Nota 3:</b> $nota3";
        echo "<br><br><b>Média final:</b> $media";
        echo "<br><br><b>Situação:</b> $situacao";
        
    ?>
</body>
</html>