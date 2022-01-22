<?php

namespace Tests;

use CZATDD\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * @test
     */
    public function foo(): void
    {
        $this->assertEquals('foo', (new Example())->foo());
    }
}
