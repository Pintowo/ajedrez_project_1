<?php

    /*
    $row1 = "1 2 3 4 5 3 2 1<br>";
    $row2 = "7 7 7 7 7 7 7 7<br>";
    $row3 = "X O X O X O X O<br>";
    $row4 = "O X O X O X O X<br>";
    $row5 = "X O X O X O X O<br>";
    $row6 = "O X O X O X O X<br>";
    $row7 = "7 7 7 7 7 7 7 7<br>";
    $row8 = "1 2 3 4 5 3 2 1<br>";
    */

    $row1 = "1 2 3 4 5 3 2 1<br>";
    $row2 = "7 7 7 7 7 7 7 7<br>";
    $row3 = "0 0 0 0 0 0 0 0<br>";
    $row4 = "0 0 0 0 0 0 0 0<br>";
    $row5 = "0 0 0 0 0 0 0 0<br>";
    $row6 = "0 0 0 0 0 0 0 0<br>";
    $row7 = "7 7 7 7 7 7 7 7<br>";
    $row8 = "1 2 3 4 5 3 2 1<br>";

    //"A   &nbsp; &nbsp; &nbsp; &nbsp0 0 0 0 0 0 0 0<br>";

    $rows = array ($row1, $row2, $row3, $row4, $row5, $row6, $row7, $row8);

    function tablero ($rows) {

        for ($i = 0; $i < 8; $i++) {
            $e = 8 - $i;
            
            echo "$e   &nbsp; &nbsp; &nbsp; &nbsp$rows[$i]";
            
        }

        echo "<br>";
        echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbspA B C D E F G H";
    }

    

?>