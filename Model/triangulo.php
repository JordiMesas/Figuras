<?php

require_once 'figuras.php';

class Triangulo extends Figure{
    
    public function __construct(){
        //llamamos al constructor padre
        parent::__construct($base , $altura);
    }    

    // own function 

    // Triangulo

    public function area(){
        $area= ($this->base * $this->altura)/2;        
        return $area;
    }

    public function CalculatePerimeter(){
        $b = $this->base;
        $a =  $this->altura;
        $r = pow($b,2) + pow($a,2);        
        $h = sqrt($r);
        $result = $b + $a +  $h ;
        return $result;
    }

   
}
