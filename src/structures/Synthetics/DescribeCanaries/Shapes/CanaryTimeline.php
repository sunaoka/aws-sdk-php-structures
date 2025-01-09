<?php

namespace Sunaoka\Aws\Structures\Synthetics\DescribeCanaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Created
 * @property \Aws\Api\DateTimeResult $LastModified
 * @property \Aws\Api\DateTimeResult $LastStarted
 * @property \Aws\Api\DateTimeResult $LastStopped
 */
class CanaryTimeline extends Shape
{
    /**
     * @param array{
     *     Created?: \Aws\Api\DateTimeResult,
     *     LastModified?: \Aws\Api\DateTimeResult,
     *     LastStarted?: \Aws\Api\DateTimeResult,
     *     LastStopped?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
