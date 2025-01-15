<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeMetricCollectionTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Metric
 */
class MetricCollectionType extends Shape
{
    /**
     * @param array{Metric?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
