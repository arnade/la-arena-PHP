<?php

    require_once "autoload.php";

    $combatientes = [

        new Guerrero ('Arken de Ferroclau', 2, 'Llumferma'),
        new Guerrero ('Braloc Tallvent', 1, 'Trencasilencis'),
        new Mago ('Elyndar Llumdarc', 3),
        new Mago ('Maelis d’Argentí', 2),
        new Mago ('Vorhen el Silenciós', 1)

    ];

    function mostrarParticipantes ($array) {

        $datosPersonajes = "";

        foreach ($array as $personaje) {

            $datosPersonajes .= $personaje -> getNombre() . " es un " . get_class($personaje) . " con " . $personaje -> getVida() . " puntos de vida <br>";

        }

        return $datosPersonajes;

    }
    