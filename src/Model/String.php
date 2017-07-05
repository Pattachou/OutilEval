<?php

namespace Model;

class String
{
    
    private $str1;
    private $str2;
    
    public function __construct($str1,$str2) {
        $this->str1 = $str1;
        $this->str2 = $str2;
    }
    
    public function getStr1() {
        return $this->str1;   
    }
    
    public function getStr2() {
        return $this->str2;   
    }
}
?>