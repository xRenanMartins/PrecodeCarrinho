<?php
/**
 * Created by PhpStorm.
 * User: renan
 * Date: 14/11/2020
 * Time: 21:32
 */

namespace App\Model\Shopping;

interface Cart{
    public function add(CartItem $item);
    public function update(CartItem $item);
    public function delete($id);
    public function has($id);
    public function getTotal();
    public function getCartItems();
}
