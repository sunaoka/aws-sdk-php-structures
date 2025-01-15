<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DimensionField>|null $Rows
 * @property list<DimensionField>|null $Columns
 * @property list<MeasureField>|null $Values
 */
class PivotTableAggregatedFieldWells extends Shape
{
    /**
     * @param array{
     *     Rows?: list<DimensionField>|null,
     *     Columns?: list<DimensionField>|null,
     *     Values?: list<MeasureField>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
