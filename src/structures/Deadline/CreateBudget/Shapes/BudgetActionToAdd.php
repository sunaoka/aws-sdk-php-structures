<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateBudget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property float $thresholdPercentage
 * @property 'STOP_SCHEDULING_AND_COMPLETE_TASKS'|'STOP_SCHEDULING_AND_CANCEL_TASKS' $type
 */
class BudgetActionToAdd extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     thresholdPercentage: float,
     *     type: 'STOP_SCHEDULING_AND_COMPLETE_TASKS'|'STOP_SCHEDULING_AND_CANCEL_TASKS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
