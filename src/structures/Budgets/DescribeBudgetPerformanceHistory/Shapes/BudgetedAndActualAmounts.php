<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgetPerformanceHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Spend|null $BudgetedAmount
 * @property Spend|null $ActualAmount
 * @property TimePeriod|null $TimePeriod
 */
class BudgetedAndActualAmounts extends Shape
{
    /**
     * @param array{
     *     BudgetedAmount?: Spend|null,
     *     ActualAmount?: Spend|null,
     *     TimePeriod?: TimePeriod|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
