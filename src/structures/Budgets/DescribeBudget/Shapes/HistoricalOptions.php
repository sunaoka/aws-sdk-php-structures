<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BudgetAdjustmentPeriod
 * @property int $LookBackAvailablePeriods
 */
class HistoricalOptions extends Shape
{
    /**
     * @param array{
     *     BudgetAdjustmentPeriod: int,
     *     LookBackAvailablePeriods?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
