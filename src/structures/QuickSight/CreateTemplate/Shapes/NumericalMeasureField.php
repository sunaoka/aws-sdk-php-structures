<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property ColumnIdentifier $Column
 * @property NumericalAggregationFunction $AggregationFunction
 * @property NumberFormatConfiguration $FormatConfiguration
 */
class NumericalMeasureField extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     Column: ColumnIdentifier,
     *     AggregationFunction?: NumericalAggregationFunction,
     *     FormatConfiguration?: NumberFormatConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
