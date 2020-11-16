<?php
/**
 * Created by PhpStorm.
 * User: renan
 * Date: 14/11/2020
 * Time: 16:43
 */
namespace App;

class Loader {
    public function register(){
        spl_autoload_register(array($this, 'autoload'));
    }

    public function autoload($class){
        $class = DIR.DS.str_replace("\\", DS, $class).'.php';
        include_once $class;
    }
}
