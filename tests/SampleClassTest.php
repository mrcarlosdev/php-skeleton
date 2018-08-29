<?php
declare(strict_types=1);

namespace Tests;

use Main\SampleClass;
use PHPUnit\Framework\TestCase;

class SampleClassTest extends TestCase
{
    public function testOne(): void
    {
        $class = new SampleClass();
        $this->assertEquals(1, $class->one());
    }
}
