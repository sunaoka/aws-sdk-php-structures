<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DimensionField> $Category
 * @property list<MeasureField> $Values
 * @property list<DimensionField> $SmallMultiples
 */
class PieChartAggregatedFieldWells extends Shape
{
    /**
     * @param array{
     *     Category?: list<DimensionField>,
     *     Values?: list<MeasureField>,
     *     SmallMultiples?: list<DimensionField>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
