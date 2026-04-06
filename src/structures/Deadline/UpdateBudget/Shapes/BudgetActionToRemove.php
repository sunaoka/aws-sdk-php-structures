<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateBudget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STOP_SCHEDULING_AND_COMPLETE_TASKS'|'STOP_SCHEDULING_AND_CANCEL_TASKS' $type
 * @property float $thresholdPercentage
 */
class BudgetActionToRemove extends Shape
{
    /**
     * @param array{
     *     type: 'STOP_SCHEDULING_AND_COMPLETE_TASKS'|'STOP_SCHEDULING_AND_CANCEL_TASKS',
     *     thresholdPercentage: float
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
