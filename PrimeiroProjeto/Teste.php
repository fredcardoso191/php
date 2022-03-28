<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Primeiro Projeto</title>
    </head>
    <body>
        <h1>Teste</h1>
        <?php 
            $teste = "Primeiro Teste <br>";
            echo $teste;
            echo "Segundo Teste <br>";
            $inteiro = 1;
            $flutuante = 0.5;
            $booleana = true;

            echo $inteiro;
            echo "<br>";
            echo $flutuante;
            echo "<br>";
            echo $booleana;
            echo "<br>";
            $inteiro = "Teste";
            echo $inteiro;
            echo "<br>";
            var_dump($booleana);
            echo "<br>";
            var_dump(`$flutuante`);
            echo "<br>";
            echo "<br>";
            echo "<br>";

            $dia = 01;
            $mes = 02;
            $ano = 2022;
            if ($dia <= 9){
                $dia = "0" . $dia;
            }
            if ($mes <= 9){
                $mes = "0" . $mes;
            }
            
            $anocompleto = $dia . "/" . $mes . "/" . $ano;
            
            echo "<br>";
            echo $anocompleto;
        ?>
    </body>
</html>