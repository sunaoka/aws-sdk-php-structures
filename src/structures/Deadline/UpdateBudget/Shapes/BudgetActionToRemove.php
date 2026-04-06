<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateBudget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $thresholdPercentage
 * @property 'STOP_SCHEDULING_AND_COMPLETE_TASKS'|'STOP_SCHEDULING_AND_CANCEL_TASKS' $type
 */
class BudgetActionToRemove extends Shape
{
    /**
     * @param array{
     *     thresholdPercentage: float,
     *     type: 'STOP_SCHEDULING_AND_COMPLETE_TASKS'|'STOP_SCHEDULING_AND_CANCEL_TASKS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
