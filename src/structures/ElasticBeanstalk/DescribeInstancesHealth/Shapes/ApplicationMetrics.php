<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeInstancesHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Duration
 * @property int $RequestCount
 * @property StatusCodes $StatusCodes
 * @property Latency $Latency
 */
class ApplicationMetrics extends Shape
{
    /**
     * @param array{
     *     Duration?: int,
     *     RequestCount?: int,
     *     StatusCodes?: StatusCodes,
     *     Latency?: Latency
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
