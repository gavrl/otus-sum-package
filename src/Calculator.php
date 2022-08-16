<?php

declare(strict_types=1);

namespace Gavrl\OtusSumPackage;

class Calculator
{
    public function sum(int|float $a, int|float $b): int|float
    {
        return $a + $b;
    }
}