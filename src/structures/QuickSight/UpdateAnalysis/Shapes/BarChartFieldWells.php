<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BarChartAggregatedFieldWells|null $BarChartAggregatedFieldWells
 */
class BarChartFieldWells extends Shape
{
    /**
     * @param array{BarChartAggregatedFieldWells?: BarChartAggregatedFieldWells|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
