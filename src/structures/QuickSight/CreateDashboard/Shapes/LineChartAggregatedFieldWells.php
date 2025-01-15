<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DimensionField>|null $Category
 * @property list<MeasureField>|null $Values
 * @property list<DimensionField>|null $Colors
 * @property list<DimensionField>|null $SmallMultiples
 */
class LineChartAggregatedFieldWells extends Shape
{
    /**
     * @param array{
     *     Category?: list<DimensionField>|null,
     *     Values?: list<MeasureField>|null,
     *     Colors?: list<DimensionField>|null,
     *     SmallMultiples?: list<DimensionField>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
