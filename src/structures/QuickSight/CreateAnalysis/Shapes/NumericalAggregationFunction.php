<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUM'|'AVERAGE'|'MIN'|'MAX'|'COUNT'|'DISTINCT_COUNT'|'VAR'|'VARP'|'STDEV'|'STDEVP'|'MEDIAN'|null $SimpleNumericalAggregation
 * @property PercentileAggregation|null $PercentileAggregation
 */
class NumericalAggregationFunction extends Shape
{
    /**
     * @param array{
     *     SimpleNumericalAggregation?: 'SUM'|'AVERAGE'|'MIN'|'MAX'|'COUNT'|'DISTINCT_COUNT'|'VAR'|'VARP'|'STDEV'|'STDEVP'|'MEDIAN'|null,
     *     PercentileAggregation?: PercentileAggregation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
