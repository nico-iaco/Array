<!DOCTYPE html>
<!--
Sweethome Domotic System
Copyright © 2017 Nicola Iacovelli
Tutti i diritti sono riservati
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Esercizio compito</title>
        <style type="text/css">
            table {
                border: 1px solid #000;
                background-color: #ccc;
            }
            tr {
                background-color: #ddd;
            }
            td {
                background-color: #eee;
                border-color: 1px solid #fff;
            }
        </style>
    </head>
    <body>
        <?php
        $righe=$_POST['righe'];
        $colonne=$_POST['colonne'];
        echo '<h3>Creazione vettore</h3>';
        echo '<table>';
        for ($i=0;$i<$righe;$i++){
            echo '<tr>';
            for($j=0;$j<$colonne;$j++){
                $matrice[$i][$j]= rand(0, 50);
                echo '<td>'.$matrice[$i][$j].'</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        echo '<hr>';
        echo '<h3>Visualizzazione vettore con prima e ultima riga invertita</h3>';
        echo '<table>';
        for ($i=0;$i<$righe;$i++){
            echo '<tr>';
            if($i==0){
                $k=$righe-1;
                for($j=0;$j<$colonne;$j++){
                    echo '<td>'.$matrice[$k][$j].'</td>';
                }
            }
            elseif ($i==$righe-1) {
                $k=0;
                for($j=0;$j<$colonne;$j++){
                    echo '<td>'.$matrice[$k][$j].'</td>';
                }
            }
            else {
                for($j=0;$j<$colonne;$j++){
                    echo '<td>'.$matrice[$i][$j].'</td>';
                }
            }
            echo '</tr>';
        }
        echo '</table>';
        echo '<hr>';
        echo '<h3>Visualizzazione vettore con prima e ultima colonna invertita</h3>';
        echo '<table>';
        for ($i=0;$i<$righe;$i++){
            echo '<tr>';
            for($j=0;$j<$colonne;$j++){
                if($j==0){
                    $k=$colonne-1;
                    echo '<td>'.$matrice[$i][$k].'</td>';
                }
                elseif ($j==$colonne-1){
                    $k=0;
                    echo '<td>'.$matrice[$i][$k].'</td>';
                }
                else{
                    echo '<td>'.$matrice[$i][$j].'</td>';
                }
            }
            echo '</tr>';
        }
        echo '</table>';
        echo '<hr>';
        echo '<h3>Visualizzazione righe pari</h3>';
        echo '<table>';
        for ($i=0;$i<$righe;$i+=2){
            echo '<tr>';
            for($j=0;$j<$colonne;$j++){
                echo '<td>'.$matrice[$i][$j].'</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        echo '<hr>';
        echo '<h3>Visualizzazione colonne dispari</h3>';
        echo '<table>';
        for ($i=0;$i<$righe;$i++){
            echo '<tr>';
            for($j=1;$j<$colonne;$j+=2){
                echo '<td>'.$matrice[$i][$j].'</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        echo '<hr>';
        ?>
    </body>
</html>
