<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUM'|'AVERAGE'|'MIN'|'MAX'|'COUNT'|'DISTINCT_COUNT'|'VAR'|'VARP'|'STDEV'|'STDEVP'|'MEDIAN' $SimpleNumericalAggregation
 * @property PercentileAggregation $PercentileAggregation
 */
class NumericalAggregationFunction extends Shape
{
    /**
     * @param array{
     *     SimpleNumericalAggregation?: 'SUM'|'AVERAGE'|'MIN'|'MAX'|'COUNT'|'DISTINCT_COUNT'|'VAR'|'VARP'|'STDEV'|'STDEVP'|'MEDIAN',
     *     PercentileAggregation?: PercentileAggregation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
