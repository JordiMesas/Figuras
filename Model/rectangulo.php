<?php

require_once 'figuras.php';

class Rectangulo extends Figure{   
    
   public function __construct($base,$altura){
        //llamamos al constructor padre
        parent::__construct($base,$altura);
    }
   
    // own function 
    
    //Rectangulo

    public function areaRectangulo(){
        $area= ($this->base * $this->altura);        
        return $area;
    }

    public function CalculatePerimeterRectangulo(){
        $b = $this->base;
        $a =  $this->altura;
        $resultR = 2 * ($b + $a);
        return $resultR;
    }

    public function area(){
        $area= ($this->base * $this->altura);        
        echo "{$area} <br>";
    }

}






