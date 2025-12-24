<?php

class Personaje {
    
    //! Propiedades
    protected string $nombre;
    protected int $vida;
    protected int $fuerza;

    function __construct ($nombre, $fuerza) {

        $this -> nombre = $nombre;
        $this -> vida = 100;
        $this -> fuerza = $fuerza;

    }

    public function setNombre ($nombre) {
        $this -> nombre = $nombre;
    }

    public function getNombre () {
        return $this -> nombre;
    }

    public function setVida ($vida) {
        $this -> vida = $vida;
    }

    public function getVida () {
        return $this -> vida;
    }

    public function setFuerza ($fuerza) {
        $this -> fuerza = $fuerza;
    }

    public function getFuerza () {
        return $this -> fuerza;
    }

    public function atacar (Personaje $objetivo) {

        echo $this -> nombre . " ataca a " . $objetivo -> getNombre() . "<br>";

        $danyoBase = $this -> fuerza * 10;

        $vidaObjetivo = $objetivo -> getVida();

        $vidaTotal = $objetivo -> getVida() - $danyoBase;

        $objetivo -> setVida ($vidaTotal);

    }

    public function curarse () {

        $curarVida = $this -> fuerza * 5;

        if ($this -> vida + $curarVida < 100) {
            $this -> vida += $curarVida;
        } else {
            $this -> vida = 100;
        }

    }

}