<?php
use PHPUnit\Framework\TestCase;

class BasicTest extends TestCase
{
    public function testReturnTrue()
    {
        $this->assertEquals(1, 1);
    }
}
