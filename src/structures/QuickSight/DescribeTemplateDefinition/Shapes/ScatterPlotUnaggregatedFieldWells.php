<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DimensionField>|null $XAxis
 * @property list<DimensionField>|null $YAxis
 * @property list<MeasureField>|null $Size
 * @property list<DimensionField>|null $Category
 * @property list<DimensionField>|null $Label
 */
class ScatterPlotUnaggregatedFieldWells extends Shape
{
    /**
     * @param array{
     *     XAxis?: list<DimensionField>|null,
     *     YAxis?: list<DimensionField>|null,
     *     Size?: list<MeasureField>|null,
     *     Category?: list<DimensionField>|null,
     *     Label?: list<DimensionField>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
