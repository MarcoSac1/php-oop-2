<?php
require_once __DIR__ .'/Category.php';

class Product{
    private $name;
    private $brand;
    private $price;
    private $imageUrl;
    private $isAvailable;
    private $categiory;

    public function __construct($name, $brand, $price, $imageUrl, $isAvailable, $categiory){
        $this->name = $name;
        $this->brand = $brand;
        $this->price = $price;
        $this->imageUrl = $imageUrl;
        $this->$isAvailable = $isAvailable;
        $this->categiory = $categiory;
    }

    public function getName(){
        return $this-> name;
    }

    public function getBrand(){
        return $this-> brand;
    }
    
    public function getPrice(){
        return $this-> price;
    }
    
    public function getImageUrl(){
        return $this-> imageUrl;
    }
    
    public function getIsAvailable(){
        return $this-> isAvailable;
    }

    public function getCategory(){
        return $this-> categiory;
    }

}