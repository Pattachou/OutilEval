<?php 

    use Model\String;
    use PHPUnit\Framework\TestCase;

    class StringTest
    {
        private $string;

        public function setUp()
        {
            $this->string = new String("first","second");
        }
        
        
        public function testGetStr1() {
            $this->assertSame('first',$this->string->getStr1());
        }

        public function testGetStr2() {
            $this->assertSame('second',$this->string->getStr2());
        }

    }

?>