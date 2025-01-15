<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeMetricCollectionTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Granularity
 */
class MetricGranularityType extends Shape
{
    /**
     * @param array{Granularity?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
