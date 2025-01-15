<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WaterfallChartAggregatedFieldWells|null $WaterfallChartAggregatedFieldWells
 */
class WaterfallChartFieldWells extends Shape
{
    /**
     * @param array{WaterfallChartAggregatedFieldWells?: WaterfallChartAggregatedFieldWells|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
