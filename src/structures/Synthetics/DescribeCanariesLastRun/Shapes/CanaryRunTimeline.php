<?php

namespace Sunaoka\Aws\Structures\Synthetics\DescribeCanariesLastRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Started
 * @property \Aws\Api\DateTimeResult $Completed
 */
class CanaryRunTimeline extends Shape
{
    /**
     * @param array{
     *     Started?: \Aws\Api\DateTimeResult,
     *     Completed?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
