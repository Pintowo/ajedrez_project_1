<?php

    include "tablero.php";

    //Falta por revisar si los cuando este a los bordes se ve afectada la matematica
    function move ($movement, $rows, $piece) {
        $abc = "ABCDEFGH";
        
        $movementiABC = $movement[0];
        $movementi123 = (int)$movement[1];

        $num1 = 2 * strpos ($abc, $movementiABC);
        
        $rows[8 - $movementi123][$num1] = "0";

        $movementfABC = $movement[-2];
        $movementf123 = (int)$movement[-1];

        $num2 = 2 * strpos ($abc, $movementfABC);

        $rows[8 - $movementf123][$num2] = $piece;
        
        return $rows;
    }
    

    function caballo ($movement, $rows, $piece) {
        $abc = 'ABCDEFGH';

        $moviABC = $movement[0];
        $movi123 = (int)$movement[1];
        $movfABC = $movement[-2];
        $movf123 = (int)$movement[-1];

        $numi = strpos ($abc, $moviABC);
        $numf = strpos ($abc, $movfABC);

        if (abs ($numf - $numi) == 1) {
            if (abs ($movi123 - $movf123) == 2) {
                return move ($movement, $rows, $piece);
            }
        } elseif (abs ($numf - $numi) == 2) {
            if (abs ($movi123 - $movf123) == 1) {
                return move ($movement, $rows, $piece);
            }
        } else {
            echo "Movimiento no válido";
        }
    }

    function alfil ($movement, $rows, $piece) {
        $abc = 'ABCDEFGH';

        $moviABC = $movement[0];
        $movi123 = (int)$movement[1];
        $movfABC = $movement[-2];
        $movf123 = (int)$movement[-1];

        $numi = strpos ($abc, $moviABC);
        $numf = strpos ($abc, $movfABC);

        if (abs($numf - $numi) == abs($movi123 - $movf123)) {
            return move ($movement, $rows, $piece);
        } elseif (abs($numf - $numi) == abs($movi123 - $movf123)) {
            return move ($movement, $rows, $piece);
        } else {
            echo "Movimiento no válido";
        }
    }    

    function torre ($movement, $rows, $piece) {
        $abc = 'ABCDEFGH';

        $moviABC = $movement[0];
        $movi123 = (int)$movement[1];
        $movfABC = $movement[-2];
        $movf123 = (int)$movement[-1];

        if ($moviABC == $movfABC) {
            return move ($movement, $rows, $piece);
        } elseif ($movi123 == $movf123) {
            return move ($movement, $rows, $piece);
        } else {
            echo "Movimiento no válido";
        }
    } 

    function reina ($movement, $rows, $piece) {
        $abc = 'ABCDEFGH';

        $moviABC = $movement[0];
        $movi123 = (int)$movement[1];
        $movfABC = $movement[-2];
        $movf123 = (int)$movement[-1];

        $numi = strpos ($abc, $moviABC);
        $numf = strpos ($abc, $movfABC);

        if ($moviABC == $movfABC) {
            return move ($movement, $rows, $piece);
        } elseif ($movi123 == $movf123) {
            return move ($movement, $rows, $piece);
        } elseif (abs($numf - $numi) == abs($movi123 - $movf123)) {
            return move ($movement, $rows, $piece);
        } elseif (abs($numf - $numi) == abs($movi123 - $movf123)) {
            return move ($movement, $rows, $piece);
        } else {
            echo "Movimiento no válido";
        }
    }    

    function rey ($movement, $rows, $piece) {
        $abc = 'ABCDEFGH';

        $moviABC = $movement[0];
        $movi123 = (int)$movement[1];
        $movfABC = $movement[-2];
        $movf123 = (int)$movement[-1];

        $numi = strpos ($abc, $moviABC);
        $numf = strpos ($abc, $movfABC);

        if (abs($numf - $numi) == 1){
            return move ($movement, $rows, $piece);
        } elseif (abs($movf123 - $movi123) == 1) {
            return move ($movement, $rows, $piece);
        } else {
            echo "Movimiento no válido";
        }
    }
?>