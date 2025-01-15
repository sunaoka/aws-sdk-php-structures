<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property ColumnIdentifier $Column
 * @property NumericalAggregationFunction|null $AggregationFunction
 * @property NumberFormatConfiguration|null $FormatConfiguration
 */
class NumericalMeasureField extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     Column: ColumnIdentifier,
     *     AggregationFunction?: NumericalAggregationFunction|null,
     *     FormatConfiguration?: NumberFormatConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
