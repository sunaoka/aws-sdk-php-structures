<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DimensionField> $Category
 * @property list<MeasureField> $BarValues
 * @property list<DimensionField> $Colors
 * @property list<MeasureField> $LineValues
 */
class ComboChartAggregatedFieldWells extends Shape
{
    /**
     * @param array{
     *     Category?: list<DimensionField>,
     *     BarValues?: list<MeasureField>,
     *     Colors?: list<DimensionField>,
     *     LineValues?: list<MeasureField>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
