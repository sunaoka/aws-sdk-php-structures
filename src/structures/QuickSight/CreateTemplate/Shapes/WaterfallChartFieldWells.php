<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WaterfallChartAggregatedFieldWells $WaterfallChartAggregatedFieldWells
 */
class WaterfallChartFieldWells extends Shape
{
    /**
     * @param array{WaterfallChartAggregatedFieldWells?: WaterfallChartAggregatedFieldWells} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
