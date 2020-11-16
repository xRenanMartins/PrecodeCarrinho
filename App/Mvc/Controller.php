<?php
/**
 * Created by PhpStorm.
 * User: renan
 * Date: 14/11/2020
 * Time: 16:46
 */

namespace App\Mvc;

abstract class Controller{
    protected $view;

    public function __construct(){
        $this->view = new View();
    }

}