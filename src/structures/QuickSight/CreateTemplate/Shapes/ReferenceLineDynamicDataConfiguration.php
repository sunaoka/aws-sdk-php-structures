<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ColumnIdentifier $Column
 * @property AggregationFunction|null $MeasureAggregationFunction
 * @property NumericalAggregationFunction $Calculation
 */
class ReferenceLineDynamicDataConfiguration extends Shape
{
    /**
     * @param array{
     *     Column: ColumnIdentifier,
     *     MeasureAggregationFunction?: AggregationFunction|null,
     *     Calculation: NumericalAggregationFunction
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
