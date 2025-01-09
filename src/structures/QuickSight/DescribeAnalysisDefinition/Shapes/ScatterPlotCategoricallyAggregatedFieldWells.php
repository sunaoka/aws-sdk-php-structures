<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MeasureField> $XAxis
 * @property list<MeasureField> $YAxis
 * @property list<DimensionField> $Category
 * @property list<MeasureField> $Size
 * @property list<DimensionField> $Label
 */
class ScatterPlotCategoricallyAggregatedFieldWells extends Shape
{
    /**
     * @param array{
     *     XAxis?: list<MeasureField>,
     *     YAxis?: list<MeasureField>,
     *     Category?: list<DimensionField>,
     *     Size?: list<MeasureField>,
     *     Label?: list<DimensionField>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
