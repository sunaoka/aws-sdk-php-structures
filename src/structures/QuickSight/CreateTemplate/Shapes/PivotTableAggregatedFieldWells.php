<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DimensionField> $Rows
 * @property list<DimensionField> $Columns
 * @property list<MeasureField> $Values
 */
class PivotTableAggregatedFieldWells extends Shape
{
    /**
     * @param array{
     *     Rows?: list<DimensionField>,
     *     Columns?: list<DimensionField>,
     *     Values?: list<MeasureField>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
