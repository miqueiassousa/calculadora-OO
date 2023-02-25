<?php


class Calculadora {

 
    public $numero = 0;


    public function somar($n1, $n2) {
        $this->numero = $n1 + $n2;
        
        
    }

    
    public function subtrair($n1, $n2) {
        $this->numero = $n1 - $n2;
    }
    
    public function dividir($n1, $n2) {
        $this->numero = $n1 / $n2;
    }

    public function multiplicar($n1, $n2) {
        $this->numero = $n1 * $n2;
    }

   
    
    public function total() {
        return $this->numero;
        exit;
    }

    /*  
     public function clear() {
        $this->numero = 0;} 
    
*/
}