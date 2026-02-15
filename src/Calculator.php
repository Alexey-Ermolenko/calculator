<?php

declare(strict_types=1);

namespace AErmolenko\Calculator;

final class Calculator
{
    public function add(float|int $a, float|int $b): float
    {
        return $a + $b;
    }

    public function subtract(float|int $a, float|int $b): float
    {
        return $a - $b;
    }

    public function multiply(float|int $a, float|int $b): float
    {
        return $a * $b;
    }

    public function divide(float|int $a, float|int $b): float
    {
        if ((float)$b === 0.0) {
            throw new \DivisionByZeroError('Division by zero');
        }

        return $a / $b;
    }
}