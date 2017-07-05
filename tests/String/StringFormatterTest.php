<?php

    namespace tests\String;

    use String\StringFormatter;
    use Model\String;
    use PHPUnit\Framework\TestCase;

    class StringFormatterTest extends TestCase
    {
       private $string;
        
        public function setUp() 
        {
            $this->string = new string("test");
        }
        
        
        public function testConcat() 
        {
            
            $string = concat("test","test1");
            
        }
      
        public function testToCamelCase() 
        {
            $string = testToCamelCase("test","test1");
        
        }
            
        public function testPrefix() 
        {
            $string = testPrefix("test","test1");
        
        }
            
        public function testSuffix() 
        {
        
            $string = testSuffix("test","test1");
        }
        
        
    }

?>