<?php

class Cibo extends Product{
    private $weight;
    private $calories;
    private $ingredients;

    public function __construct($name, $brand, $price, $imageUrl, $isAvailable,Category $categiory, $weight, $calories, $ingredients){
        parent::__construct ($name, $brand, $price, $imageUrl, $isAvailable, $categiory);
        $this -> weight = $weight;
        $this -> calories = $calories;
        $this -> $ingredients = $ingredients;
        
        
    }
    
    public function getWeight(){
        return $this -> weight;
    }

    public function getCalories(){
        return $this -> calories;
    }
    
    public function getIngredients(){
        return $this -> ingredients;
    }
}