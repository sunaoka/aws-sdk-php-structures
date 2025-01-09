<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Spend $ActualSpend
 * @property Spend $ForecastedSpend
 */
class CalculatedSpend extends Shape
{
    /**
     * @param array{
     *     ActualSpend: Spend,
     *     ForecastedSpend?: Spend
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
