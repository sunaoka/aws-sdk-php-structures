<?php

namespace Sunaoka\Aws\Structures\Budgets\UpdateBudget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Spend $ActualSpend
 * @property Spend|null $ForecastedSpend
 */
class CalculatedSpend extends Shape
{
    /**
     * @param array{
     *     ActualSpend: Spend,
     *     ForecastedSpend?: Spend|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
