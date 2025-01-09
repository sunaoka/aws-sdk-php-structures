<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DimensionField> $Category
 * @property list<DimensionField> $Color
 * @property list<MeasureField> $Values
 */
class RadarChartAggregatedFieldWells extends Shape
{
    /**
     * @param array{
     *     Category?: list<DimensionField>,
     *     Color?: list<DimensionField>,
     *     Values?: list<MeasureField>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
