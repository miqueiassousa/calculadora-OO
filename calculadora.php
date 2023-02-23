<?php


class Calculadora {

    private float $numero = 0;

    public function add($n) {
        $this->numero = $this->numero + $n;
    }

    public function sub($n) {
        $this->numero = $this->numero - $n;
    }

    public function multiply($n) {
        $this->numero = $this->numero * $n;
    }

    public function divide($n) {
        $this->numero = $this->numero / $n;
    }

    public function total() {
        return $this->numero;
    }

    public function clear() {
        $this->numero = 0;
    }


}