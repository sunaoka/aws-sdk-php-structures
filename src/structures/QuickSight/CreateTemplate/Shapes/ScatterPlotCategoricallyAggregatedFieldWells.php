<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MeasureField>|null $XAxis
 * @property list<MeasureField>|null $YAxis
 * @property list<DimensionField>|null $Category
 * @property list<MeasureField>|null $Size
 * @property list<DimensionField>|null $Label
 */
class ScatterPlotCategoricallyAggregatedFieldWells extends Shape
{
    /**
     * @param array{
     *     XAxis?: list<MeasureField>|null,
     *     YAxis?: list<MeasureField>|null,
     *     Category?: list<DimensionField>|null,
     *     Size?: list<MeasureField>|null,
     *     Label?: list<DimensionField>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
