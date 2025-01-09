<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DescribeAlert\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $MetricList
 * @property list<DimensionFilter> $DimensionFilterList
 */
class AlertFilters extends Shape
{
    /**
     * @param array{
     *     MetricList?: list<string>,
     *     DimensionFilterList?: list<DimensionFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
