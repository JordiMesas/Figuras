<?php

class Figure{
    //vamos a poner atributos
    protected $base;
    protected $altura;

    public function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;
    }

    //getters

    public function getBase()
    {
        return $this->base;
    }

       
    public function getAltura()
    {
        return $this->altura;
    }

    //setters

    public function setBase($base)
    {
        $this->base = $base;

        return $this;
    }

    
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    //method own

    public function area(){
        echo "Calculará el area:";
    }
    public function perimetro(){
        echo "Calculará el perimetro: ";
    }

}