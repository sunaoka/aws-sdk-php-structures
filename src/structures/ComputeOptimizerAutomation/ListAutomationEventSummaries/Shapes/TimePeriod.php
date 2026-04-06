<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListAutomationEventSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $startTimeInclusive
 * @property \Aws\Api\DateTimeResult|null $endTimeExclusive
 */
class TimePeriod extends Shape
{
    /**
     * @param array{
     *     startTimeInclusive?: \Aws\Api\DateTimeResult|null,
     *     endTimeExclusive?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
