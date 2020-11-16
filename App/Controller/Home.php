<?php
/**
 * Created by PhpStorm.
 * User: renan
 * Date: 14/11/2020
 * Time: 17:03
 */

namespace App\Controller;

use App\Mvc\Controller;
use App\Model\Product\ProductRepository;

class Home extends Controller {
    private $product;

    public function __construct(ProductRepository $product){
        parent::__construct();
        $this->product = $product;
    }

    public function index(){
        $this->view->set('products', $this->product->getProducts());
        $this->view->render("home");
    }
}