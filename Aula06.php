<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Aula 06</title>
    </head>
    <body>
        <?php
            include 'operations.php';
            
            $n1 = 25; $n2 = 15;
            $res = soma($n1, $n2);
            echo "Soma: $n1 + $n2 = $res";
            $res = sub($n1, $n2);
            echo "<br>Subtração: $n1 - $n2 = $res";
            mult($n1, $n2, $res);
            echo "<br>Multiplicação: $n1 x $n2 = $res";
            div($n1, $n2, $res);
            echo "<br>Divisão: $n1 / $n2 = $res";
        ?>
    </body>
</html>
