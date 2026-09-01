<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSegmentSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $NextExecutedAt
 * @property \Aws\Api\DateTimeResult|null $LastExecutedAt
 */
class ScheduledExecutions extends Shape
{
    /**
     * @param array{
     *     NextExecutedAt?: \Aws\Api\DateTimeResult|null,
     *     LastExecutedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
