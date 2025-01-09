<?php

namespace Sunaoka\Aws\Structures\Deadline\GetBudget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FixedBudgetSchedule $fixed
 */
class BudgetSchedule extends Shape
{
    /**
     * @param array{fixed?: FixedBudgetSchedule} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
