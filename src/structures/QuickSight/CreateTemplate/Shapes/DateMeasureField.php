<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property ColumnIdentifier $Column
 * @property 'COUNT'|'DISTINCT_COUNT'|'MIN'|'MAX' $AggregationFunction
 * @property DateTimeFormatConfiguration $FormatConfiguration
 */
class DateMeasureField extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     Column: ColumnIdentifier,
     *     AggregationFunction?: 'COUNT'|'DISTINCT_COUNT'|'MIN'|'MAX',
     *     FormatConfiguration?: DateTimeFormatConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
