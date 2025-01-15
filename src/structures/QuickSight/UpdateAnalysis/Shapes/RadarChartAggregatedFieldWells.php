<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DimensionField>|null $Category
 * @property list<DimensionField>|null $Color
 * @property list<MeasureField>|null $Values
 */
class RadarChartAggregatedFieldWells extends Shape
{
    /**
     * @param array{
     *     Category?: list<DimensionField>|null,
     *     Color?: list<DimensionField>|null,
     *     Values?: list<MeasureField>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
