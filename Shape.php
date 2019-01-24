<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 24/01/2019
 * Time: 14:12
 */
class Shape
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function show(){
        return "I am a shape. My name is $this->name";
    }
}