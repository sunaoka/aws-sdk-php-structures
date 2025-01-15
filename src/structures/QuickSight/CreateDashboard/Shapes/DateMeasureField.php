<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property ColumnIdentifier $Column
 * @property 'COUNT'|'DISTINCT_COUNT'|'MIN'|'MAX'|null $AggregationFunction
 * @property DateTimeFormatConfiguration|null $FormatConfiguration
 */
class DateMeasureField extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     Column: ColumnIdentifier,
     *     AggregationFunction?: 'COUNT'|'DISTINCT_COUNT'|'MIN'|'MAX'|null,
     *     FormatConfiguration?: DateTimeFormatConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
