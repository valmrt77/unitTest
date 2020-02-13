<?php
// tests/AppBundle/Util/CalculatorTest.php
namespace Tests\AppBundle\Util;

use AppBundle\Util\AddFunction;
use PHPUnit\Framework\TestCase;

class AddFunctionTest extends TestCase
{
    public function testAdd()
    {
        $addFunction = new addFunction();
        $iResult = $addFunction->add(3, 2);

        $this->assertEquals(5, $iResult);
        // assert that your calculator added the numbers correctly!
    }
}
