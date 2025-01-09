<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DimensionField> $Categories
 * @property list<MeasureField> $Values
 * @property list<DimensionField> $Breakdowns
 */
class WaterfallChartAggregatedFieldWells extends Shape
{
    /**
     * @param array{
     *     Categories?: list<DimensionField>,
     *     Values?: list<MeasureField>,
     *     Breakdowns?: list<DimensionField>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
