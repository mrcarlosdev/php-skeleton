<?php

namespace Tests;

use Main\SampleClass;
use PHPUnit\Framework\TestCase;

class SampleClassTest extends TestCase
{
    public function testOne()
    {
        $class = new SampleClass();

        $this->assertEquals(1, $class->one());
    }
}
