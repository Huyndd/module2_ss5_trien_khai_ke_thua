<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 24/01/2019
 * Time: 14:17
 */
include_once ('Shape.php');
class Rectangle extends Shape
{
    public $width;
    public $height;
    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }
    public function calculateArea(){
        return $this->height * $this->width;
    }
    public function calculatePerimeter(){
        return ($this->height + $this->width) * 2;
    }
}