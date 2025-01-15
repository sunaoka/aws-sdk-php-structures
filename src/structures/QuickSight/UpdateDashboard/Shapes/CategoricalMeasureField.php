<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property ColumnIdentifier $Column
 * @property 'COUNT'|'DISTINCT_COUNT'|null $AggregationFunction
 * @property StringFormatConfiguration|null $FormatConfiguration
 */
class CategoricalMeasureField extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     Column: ColumnIdentifier,
     *     AggregationFunction?: 'COUNT'|'DISTINCT_COUNT'|null,
     *     FormatConfiguration?: StringFormatConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
