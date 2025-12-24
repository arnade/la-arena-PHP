<?php

    class Guerrero extends Personaje {

        private string $espada;

        function __construct ($nombre, $fuerza, $espada) {
            $this -> espada = $espada;

            parent::__construct ($nombre, $fuerza);
            
        }

        public function atacar() {

            $probabilidad = rand(0,1);

            if ($probabilidad = 1) {
                
                parent::atacar();
                parent::atacar();
            
            } else {

                echo $this -> nombre . " ha fallado el golpe <br>";

            }

        }

    }