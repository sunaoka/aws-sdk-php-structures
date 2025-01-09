<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property ColumnIdentifier $Column
 * @property 'COUNT'|'DISTINCT_COUNT' $AggregationFunction
 * @property StringFormatConfiguration $FormatConfiguration
 */
class CategoricalMeasureField extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     Column: ColumnIdentifier,
     *     AggregationFunction?: 'COUNT'|'DISTINCT_COUNT',
     *     FormatConfiguration?: StringFormatConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
