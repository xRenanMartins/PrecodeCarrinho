<?php
/**
 * Created by PhpStorm.
 * User: renan
 * Date: 14/11/2020
 * Time: 18:07
 */


namespace App\Model\Product;

class Product{
    private $id;
    private $name;
    private $price;
    private $img;

    public function setId($id){
        if (!is_int($id)) {
            throw new \InvalidArgumentException("Id precisa ser inteiro");
        }
        $this->id = $id;
    }

    public function setName($name){
        if(empty($name)){
            throw new \InvalidArgumentException("É obrigatório ter nome.");
        }
        $this->name = $name;
    }

    public function setPrice($price){
        if(!is_float($price)){
            throw new \InvalidArgumentException("Preço precisa ser float");
        }
        $this->$price = $price;
    }

    public function setImg($img){
        if(empty($img)){
            throw new \InvalidArgumentException("É obrigatório carregar a imagem.");
        }
        $this->img = $img;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getImg(){
        return $this->img;
    }
}
