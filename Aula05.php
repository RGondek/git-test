<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Aula 05</title>
    </head>
    <body>
        <?php
            $aulas = array(array("02K01", "Tecnologia Web II", "Segunda", "Charles"),array("02J01", "Linguagem de Programação I", "Terça", "João"),array("02K01", "Linguagem de Programação I", "Quarta", "Charles"));
            echo "<table id='tbAula5'>";
            echo "<tr><th>Turma</th><th>Disciplina</th><th>Semana</th><th>Professor</th></tr>";
                for($i=0;$i< count($aulas);$i++){
                    echo "<tr>";
                    $vet = $aulas[$i];
                    for($j=0;$j< count($vet);$j++){
                        echo "<td> $vet[$j] </td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
        ?>
    </body>
</html>
