<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateBudget\Shapes;

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
