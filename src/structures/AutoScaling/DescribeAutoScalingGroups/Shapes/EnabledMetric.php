<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeAutoScalingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Metric
 * @property string|null $Granularity
 */
class EnabledMetric extends Shape
{
    /**
     * @param array{
     *     Metric?: string|null,
     *     Granularity?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
