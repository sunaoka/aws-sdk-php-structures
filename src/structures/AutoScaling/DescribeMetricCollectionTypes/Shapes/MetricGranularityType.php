<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeMetricCollectionTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Granularity
 */
class MetricGranularityType extends Shape
{
    /**
     * @param array{Granularity?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
