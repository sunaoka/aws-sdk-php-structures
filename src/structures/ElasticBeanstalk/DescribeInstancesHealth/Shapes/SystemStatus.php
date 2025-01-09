<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeInstancesHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CPUUtilization $CPUUtilization
 * @property list<double> $LoadAverage
 */
class SystemStatus extends Shape
{
    /**
     * @param array{
     *     CPUUtilization?: CPUUtilization,
     *     LoadAverage?: list<double>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
