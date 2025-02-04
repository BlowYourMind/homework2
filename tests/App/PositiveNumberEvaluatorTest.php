<?php

namespace App;

use PHPUnit\Framework\TestCase;

class PositiveNumberEvaluatorTest extends TestCase
{
    public function testEvaluate()
    {
        $evaluator = new PositiveNumberEvaluator();
        $this->assertTrue($evaluator->evaluate(1));
        $this->assertTrue($evaluator->evaluate(10));
        $this->assertFalse($evaluator->evaluate(-1));
        $this->assertFalse($evaluator->evaluate(0));
    }
}
