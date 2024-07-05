<?php
require_once __DIR__ .'/Category.php';

class Product{
    private $name;
    private $brand;
    private $price;
    private $imageUrl;
    private $isAvailable;
    private $category;

    public function __construct($name, $brand, $price, $imageUrl, $isAvailable,Category $category){
        $this->name = $name;
        $this->brand = $brand;
        $this->price = $price;
        $this->imageUrl = $imageUrl;
        $this->isAvailable = $isAvailable;
        $this->category = $category;
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
        return $this-> category;
    }

}