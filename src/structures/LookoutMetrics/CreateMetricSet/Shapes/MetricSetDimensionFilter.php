<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\CreateMetricSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property list<Filter>|null $FilterList
 */
class MetricSetDimensionFilter extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     FilterList?: list<Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
