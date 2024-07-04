<?php

class Giochi  extends Product{
    private $material;
    private $color;
    
    public function __construct($name, $brand, $price, $imageUrl, $isAvailable,Category $categiory, $material, $color){
        parent::__construct ($name, $brand, $price, $imageUrl, $isAvailable, $categiory);
        $this -> material = $material;
        $this -> color = $color;
    }
    
    public function getMaterial(){
        return $this -> material;
    }

    public function getColor(){
        return $this -> color;
    }
}