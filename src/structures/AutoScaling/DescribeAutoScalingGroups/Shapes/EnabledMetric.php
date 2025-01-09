<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeAutoScalingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Metric
 * @property string $Granularity
 */
class EnabledMetric extends Shape
{
    /**
     * @param array{
     *     Metric?: string,
     *     Granularity?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
