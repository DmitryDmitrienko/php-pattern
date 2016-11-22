<?php
/**
 * Created by PhpStorm.
 * User: dmitr
 * Date: 22.11.2016
 * Time: 22:22
 */

namespace PhpPatterns;

abstract class Product{
    private $data = array();

    public function set($k, $v){
        $this->data[$k] = $v;
    }
    public function get($k){
        if(isset($this->data[$k])) return $this->data[$k];
        return NULL;
    }
}