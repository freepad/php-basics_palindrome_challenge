<?php

namespace App;

require_once "Solution.php";

use App\Solution\isPalindrome;

class TestSolution extends \PHPUnit_Framework_TestCase
{
    /**
    * @dataProvider additionProvider
    */
    public function testPalindrome($expected, $argument)
    {
        $this->assertEquals($expected, isPalindrome($argument));
    }

    public function additionProvider()
    {
        return [
            [true, ''],
            [true, 'bob'],
            [false, 'Hexlet'],
            [true, 101],
            [false, 1234],
            [false, 'world'],
            [true, 'Anna'],
        ];
    }
}
