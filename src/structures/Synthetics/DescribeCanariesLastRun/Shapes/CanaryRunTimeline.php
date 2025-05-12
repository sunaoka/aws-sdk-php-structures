<?php

namespace Sunaoka\Aws\Structures\Synthetics\DescribeCanariesLastRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $Started
 * @property \Aws\Api\DateTimeResult|null $Completed
 * @property \Aws\Api\DateTimeResult|null $MetricTimestampForRunAndRetries
 */
class CanaryRunTimeline extends Shape
{
    /**
     * @param array{
     *     Started?: \Aws\Api\DateTimeResult|null,
     *     Completed?: \Aws\Api\DateTimeResult|null,
     *     MetricTimestampForRunAndRetries?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
