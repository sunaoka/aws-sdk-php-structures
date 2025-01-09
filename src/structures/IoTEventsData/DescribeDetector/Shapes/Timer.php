<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\DescribeDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property \Aws\Api\DateTimeResult $timestamp
 */
class Timer extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     timestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
