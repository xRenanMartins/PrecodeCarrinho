<?php
/**
 * Created by PhpStorm.
 * User: renan
 * Date: 14/11/2020
 * Time: 18:25
 */

namespace App\Model\Product;


interface ProductRepository{
    public function getProducts();
    public function getProduct($id);
}