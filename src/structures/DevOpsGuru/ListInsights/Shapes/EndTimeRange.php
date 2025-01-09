<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $FromTime
 * @property \Aws\Api\DateTimeResult $ToTime
 */
class EndTimeRange extends Shape
{
    /**
     * @param array{
     *     FromTime?: \Aws\Api\DateTimeResult,
     *     ToTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
