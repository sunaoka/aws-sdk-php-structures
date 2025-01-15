<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeInstancesHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Duration
 * @property int|null $RequestCount
 * @property StatusCodes|null $StatusCodes
 * @property Latency|null $Latency
 */
class ApplicationMetrics extends Shape
{
    /**
     * @param array{
     *     Duration?: int|null,
     *     RequestCount?: int|null,
     *     StatusCodes?: StatusCodes|null,
     *     Latency?: Latency|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
