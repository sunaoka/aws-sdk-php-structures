<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeInstancesHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CPUUtilization|null $CPUUtilization
 * @property list<double>|null $LoadAverage
 */
class SystemStatus extends Shape
{
    /**
     * @param array{
     *     CPUUtilization?: CPUUtilization|null,
     *     LoadAverage?: list<double>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
