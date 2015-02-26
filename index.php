<!DOCTYPE html>
<html>
    <head>
        <title>Aula 02 PHP + GIT</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h2>Aula 01</h2>
        <?php
            $p1 = 8.0;
            $m1 = 6.0;
            $m2 = 9.0;
            $proj1 = 6.0;
            $proj2 = 6.0;
            $proj3 = 6.0;
            $proj4 = 6.0;
            $trabF = 7.0;
            $proc = 6.0;
            $pF = 6.0;
            
            $mI = ((30*$p1) + (10*$m1) + (10*$m2) + (5*$proj1) + (5*$proj2) + (5*$proj3) + (5*$proj4) + (10*$trabF) + (20*$pF))/100;
            $mF = 0.0;
            
            if ($mI >= 7.5) {
                $mF = $mI;
                echo "Aluno aprovado sem prova final!! <br> Parabéns!! Boas Férias!!";
            }
            else {
                $mF = ($mI + $pF)/2;
                if ($mF >= 5.0) {
                    echo "Aprovado com prova final!! <br> Agora já pode descansar tranquilo.";
                }
                else {
                    echo "Reprovado <br> Não foi dessa vez. Ano que vem tem mais TWII.";
                }
            }
            echo "<br><br>Média intermediária: $mI <br> Média Final: $mF";
        ?>
        <br>
        <br>
        <hr><hr>
        <h2>Aula 02</h2>
        <h3>Exercício 01</h3>
        <h4>a)</h4>
        <?php 
            echo "<table><tr><th>ID</th><th>NOME</th></tr>";
            for ($i = 0; $i < 5; $i++){
                echo "<tr><td>id</td><td>nome</td></tr>";
            }
            echo "</table>";
        ?>
        <br>
        <hr>
        <h4>b)</h4>
        <?php 
            echo "<table><tr><th>ID</th><th>NOME</th><th>DESC</th></tr>";
            for ($i = 0; $i < 5; $i++){
                echo "<tr><td>id</td><td>nome</td><td>desc</td></tr>";
            }
            echo "</table>";
        ?>
        <br>
        <hr>
        <h4>c)</h4>
        <?php 
            echo "<table><tr><th>ID</th><th>NOME</th><th>DESC</th></tr>";
            for ($i = 0; $i < 7; $i++){
                if ($i % 2 == 0){ echo "<tr><td>id</td><td>nome</td><td>desc</td></tr>"; }
                else { echo "<tr class='par'><td>id</td><td>nome</td><td>desc</td></tr>"; }
            }
            echo "</table>";
        ?>
    </body>
</html>
