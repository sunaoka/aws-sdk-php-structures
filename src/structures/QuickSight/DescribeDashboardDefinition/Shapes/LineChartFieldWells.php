<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LineChartAggregatedFieldWells|null $LineChartAggregatedFieldWells
 */
class LineChartFieldWells extends Shape
{
    /**
     * @param array{LineChartAggregatedFieldWells?: LineChartAggregatedFieldWells|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
