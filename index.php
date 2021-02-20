<!DOCTYPE html>

<html>

    <head>
        <title>Ajedrez</title>
    </head>

    <body>

        <form action = "index.php" method = "post">
            <input type = "textbox" name = "movimiento">
            <input type = "submit">
        <form>

        <?php
            include "piezas.php";

            // ola

            $movement = $_POST ["movimiento"];

            echo "<br>";

            echo tablero ($rows);

            echo "<br>";

            $rows = verifier ($movement, $rows);
            
            function verifier ($movement, $rows) {
                $abc = "ABCDEFGH";
        
                $movementiABC = $movement[0];
                $movementi123 = (int)$movement[1];

                $num1 = 2 * strpos ($abc, $movementiABC);

                $ipos = $rows[8 - $movementi123][$num1];
                
                if ($ipos == "1") {
                    return torre ($movement, $rows, "1");
                } elseif ($ipos == "2") {
                    return caballo ($movement, $rows, "2");
                } elseif ($ipos == "3") {
                    return alfil ($movement, $rows, "3");
                } elseif ($ipos == "4") {
                    return reina ($movement, $rows, "4");
                } elseif ($ipos == "5") {
                    return rey ($movement, $rows, "5");
                } elseif ($ipos == "0") {
                    echo "Movimiento invalido";
                }
            }

            tablero ($rows);

        ?>

    </body>

</html>
