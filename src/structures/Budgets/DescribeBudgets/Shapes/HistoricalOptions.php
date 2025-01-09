<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 60> $BudgetAdjustmentPeriod
 * @property int<1, 60> $LookBackAvailablePeriods
 */
class HistoricalOptions extends Shape
{
    /**
     * @param array{
     *     BudgetAdjustmentPeriod: int<1, 60>,
     *     LookBackAvailablePeriods?: int<1, 60>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
