<?php

namespace Sunaoka\Aws\Structures\Payments\BatchGetFinancialRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CurrencyAmount $outstanding
 * @property CurrencyAmount $processing
 * @property CurrencyAmount $settled
 * @property CurrencyAmount $canceled
 */
class Balances extends Shape
{
    /**
     * @param array{
     *     outstanding: CurrencyAmount,
     *     processing: CurrencyAmount,
     *     settled: CurrencyAmount,
     *     canceled: CurrencyAmount
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
