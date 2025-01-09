<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DimensionField> $XAxis
 * @property list<DimensionField> $YAxis
 * @property list<MeasureField> $Size
 * @property list<DimensionField> $Category
 * @property list<DimensionField> $Label
 */
class ScatterPlotUnaggregatedFieldWells extends Shape
{
    /**
     * @param array{
     *     XAxis?: list<DimensionField>,
     *     YAxis?: list<DimensionField>,
     *     Size?: list<MeasureField>,
     *     Category?: list<DimensionField>,
     *     Label?: list<DimensionField>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
