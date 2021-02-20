<?php

    include "movimientos.php";

    class piezas {
        public $nombre;
        public $color;
        public $posicion;
        

        function setposition ($nposicion) {
            $this-> posicion = $nposicion;
        }

        function accesspiece ($nombre, $color, $turn) {
            if (($turn % 2) == 1 && $color == 'blancas') {

            } else {
                echo "Es turno de las negras";
                return;
            }
            if (($turn % 2) == 0 && $color == 'negras') {

            } else {
                echo "Es turno de las blancas";
                return;
            }

        }
    }

?>  