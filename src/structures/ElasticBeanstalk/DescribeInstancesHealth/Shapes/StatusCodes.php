<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeInstancesHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Status2xx
 * @property int|null $Status3xx
 * @property int|null $Status4xx
 * @property int|null $Status5xx
 */
class StatusCodes extends Shape
{
    /**
     * @param array{
     *     Status2xx?: int|null,
     *     Status3xx?: int|null,
     *     Status4xx?: int|null,
     *     Status5xx?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
