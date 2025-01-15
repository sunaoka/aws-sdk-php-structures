<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DimensionField>|null $Category
 * @property list<MeasureField>|null $BarValues
 * @property list<DimensionField>|null $Colors
 * @property list<MeasureField>|null $LineValues
 */
class ComboChartAggregatedFieldWells extends Shape
{
    /**
     * @param array{
     *     Category?: list<DimensionField>|null,
     *     BarValues?: list<MeasureField>|null,
     *     Colors?: list<DimensionField>|null,
     *     LineValues?: list<MeasureField>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
