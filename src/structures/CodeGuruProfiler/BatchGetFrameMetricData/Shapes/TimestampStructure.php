<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\BatchGetFrameMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $value
 */
class TimestampStructure extends Shape
{
    /**
     * @param array{value: \Aws\Api\DateTimeResult} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
