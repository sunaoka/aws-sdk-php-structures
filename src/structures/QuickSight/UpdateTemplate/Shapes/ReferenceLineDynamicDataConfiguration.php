<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ColumnIdentifier $Column
 * @property AggregationFunction $MeasureAggregationFunction
 * @property NumericalAggregationFunction $Calculation
 */
class ReferenceLineDynamicDataConfiguration extends Shape
{
    /**
     * @param array{
     *     Column: ColumnIdentifier,
     *     MeasureAggregationFunction?: AggregationFunction,
     *     Calculation: NumericalAggregationFunction
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
