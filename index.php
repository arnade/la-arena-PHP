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

    function combatir ($array) {

        $personajeAleatorio1 = rand (0, 4);
        $personajeAleatorio2 = rand (0, 4);

        while ( $personajeAleatorio1 == $personajeAleatorio2) {

            $personajeAleatorio2 = rand (0, 4);

        }

        for ($i = 0; $i <= 2; $i++) {

            echo "Ronda $i <br>";

            echo $array[$personajeAleatorio1] -> getNombre() . " pega a " . $array[$personajeAleatorio2] -> getNombre() . "<br>";
            $array[$personajeAleatorio1] -> atacar();
            echo "A " . $array[$personajeAleatorio2] -> getNombre() . "le quedan " . $array[$personajeAleatorio2] -> getVida() . " puntos de vida <br><br>";

            echo $array[$personajeAleatorio2] -> getNombre() . " pega a " . $array[$personajeAleatorio1] -> getNombre() . "<br>";
            $array[$personajeAleatorio2] -> atacar();
            echo "A " . $array[$personajeAleatorio1] -> getNombre() . "le quedan " . $array[$personajeAleatorio1] -> getVida() . " puntos de vida <br><br>";

            if ($array[$personajeAleatorio1] -> getVida() == 0) {
                $i = 3;
            } else if ($array[$personajeAleatorio2] -> getVida() == 0) {
                $i = 3;
            }

        }

        if ($array[$personajeAleatorio1] -> getVida() > $array[$personajeAleatorio2] -> getVida()) {
            echo $array[$personajeAleatorio1] -> getNombre() . " ha ganado";
        } else if ($array[$personajeAleatorio2] -> getVida() > $array[$personajeAleatorio1] -> getVida()) {
            echo $array[$personajeAleatorio2] -> getNombre() . " ha ganado";
        } else {
            echo "han quedado en empate";
        }

    }

    echo mostrarParticipantes ($participantes);
    combatir ($participantes);
    