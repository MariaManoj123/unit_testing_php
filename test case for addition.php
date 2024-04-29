<?php 

require 'add.php';

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase {
    public function testAdd() {
        $a = 5;
        $b = 3;
        $expectedResult = 8;
        $result = add($a, $b);
        $this->assertEquals($expectedResult, $result);
    }
}
?>
