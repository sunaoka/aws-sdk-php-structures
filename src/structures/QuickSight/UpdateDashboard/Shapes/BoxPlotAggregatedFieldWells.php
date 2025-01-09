<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DimensionField> $GroupBy
 * @property list<MeasureField> $Values
 */
class BoxPlotAggregatedFieldWells extends Shape
{
    /**
     * @param array{
     *     GroupBy?: list<DimensionField>,
     *     Values?: list<MeasureField>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
