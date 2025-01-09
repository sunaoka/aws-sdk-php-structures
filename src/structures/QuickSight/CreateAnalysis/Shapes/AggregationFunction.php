<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NumericalAggregationFunction $NumericalAggregationFunction
 * @property 'COUNT'|'DISTINCT_COUNT' $CategoricalAggregationFunction
 * @property 'COUNT'|'DISTINCT_COUNT'|'MIN'|'MAX' $DateAggregationFunction
 * @property AttributeAggregationFunction $AttributeAggregationFunction
 */
class AggregationFunction extends Shape
{
    /**
     * @param array{
     *     NumericalAggregationFunction?: NumericalAggregationFunction,
     *     CategoricalAggregationFunction?: 'COUNT'|'DISTINCT_COUNT',
     *     DateAggregationFunction?: 'COUNT'|'DISTINCT_COUNT'|'MIN'|'MAX',
     *     AttributeAggregationFunction?: AttributeAggregationFunction
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
