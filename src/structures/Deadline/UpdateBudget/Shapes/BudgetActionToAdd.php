<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateBudget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STOP_SCHEDULING_AND_COMPLETE_TASKS'|'STOP_SCHEDULING_AND_CANCEL_TASKS' $type
 * @property float $thresholdPercentage
 * @property string $description
 */
class BudgetActionToAdd extends Shape
{
    /**
     * @param array{
     *     type: 'STOP_SCHEDULING_AND_COMPLETE_TASKS'|'STOP_SCHEDULING_AND_CANCEL_TASKS',
     *     thresholdPercentage: float,
     *     description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
