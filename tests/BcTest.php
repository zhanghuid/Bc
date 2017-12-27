<?php

use Huid\Bc\Bc;
use Huid\Bc\Tests\TestCase;

class BcTest extends TestCase
{

    public function testAdd()
    {
        $bc = new Bc(10, 1);
        $actual = $bc->add(0.9)->value();

        $expected = bcadd(10, 0.9, 1);

        $this->assertEquals($expected, $actual);
    }

    public function testSub()
    {
        $bc = new Bc(10, 2);
        $actual = $bc->sub(0.33)->value();
        
        $expected = bcsub(10, 0.33, 2);

        $this->assertEquals($expected, $actual);
    }

}