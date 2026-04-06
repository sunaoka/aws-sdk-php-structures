<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DescribeAlert\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $MetricList
 * @property list<DimensionFilter>|null $DimensionFilterList
 */
class AlertFilters extends Shape
{
    /**
     * @param array{
     *     MetricList?: list<string>|null,
     *     DimensionFilterList?: list<DimensionFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
