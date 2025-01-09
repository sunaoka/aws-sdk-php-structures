<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\UpdateMetricSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<Filter> $FilterList
 */
class MetricSetDimensionFilter extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     FilterList?: list<Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
