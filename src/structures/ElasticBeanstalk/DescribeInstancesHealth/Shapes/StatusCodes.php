<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeInstancesHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Status2xx
 * @property int $Status3xx
 * @property int $Status4xx
 * @property int $Status5xx
 */
class StatusCodes extends Shape
{
    /**
     * @param array{
     *     Status2xx?: int,
     *     Status3xx?: int,
     *     Status4xx?: int,
     *     Status5xx?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
