<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NumericalAggregationFunction|null $NumericalAggregationFunction
 * @property 'COUNT'|'DISTINCT_COUNT'|null $CategoricalAggregationFunction
 * @property 'COUNT'|'DISTINCT_COUNT'|'MIN'|'MAX'|null $DateAggregationFunction
 * @property AttributeAggregationFunction|null $AttributeAggregationFunction
 */
class AggregationFunction extends Shape
{
    /**
     * @param array{
     *     NumericalAggregationFunction?: NumericalAggregationFunction|null,
     *     CategoricalAggregationFunction?: 'COUNT'|'DISTINCT_COUNT'|null,
     *     DateAggregationFunction?: 'COUNT'|'DISTINCT_COUNT'|'MIN'|'MAX'|null,
     *     AttributeAggregationFunction?: AttributeAggregationFunction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
