<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateBudget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $endTime
 * @property \Aws\Api\DateTimeResult $startTime
 */
class FixedBudgetSchedule extends Shape
{
    /**
     * @param array{
     *     endTime: \Aws\Api\DateTimeResult,
     *     startTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
