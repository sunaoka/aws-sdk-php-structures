<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgetPerformanceHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Spend $BudgetedAmount
 * @property Spend $ActualAmount
 * @property TimePeriod $TimePeriod
 */
class BudgetedAndActualAmounts extends Shape
{
    /**
     * @param array{
     *     BudgetedAmount?: Spend,
     *     ActualAmount?: Spend,
     *     TimePeriod?: TimePeriod
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
