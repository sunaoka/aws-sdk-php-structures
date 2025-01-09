<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DimensionField> $Category
 * @property list<MeasureField> $Values
 * @property list<DimensionField> $Colors
 * @property list<DimensionField> $SmallMultiples
 */
class BarChartAggregatedFieldWells extends Shape
{
    /**
     * @param array{
     *     Category?: list<DimensionField>,
     *     Values?: list<MeasureField>,
     *     Colors?: list<DimensionField>,
     *     SmallMultiples?: list<DimensionField>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
