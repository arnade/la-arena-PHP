<?php

class Mago extends Personaje {

    public int $mana = 3;

    function __construct($nombre, $fuerza) {
        parent::__construct($nombre, $fuerza);
    }
    
    public function atacar() {

        if ( $this -> mana > 0 ) {

            parent::atacar() * $this -> mana;
            $this -> mana -= 1;

        } else {

            parent::atacar();

        }

    }

}