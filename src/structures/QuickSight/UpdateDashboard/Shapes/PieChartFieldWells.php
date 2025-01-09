<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PieChartAggregatedFieldWells $PieChartAggregatedFieldWells
 */
class PieChartFieldWells extends Shape
{
    /**
     * @param array{PieChartAggregatedFieldWells?: PieChartAggregatedFieldWells} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
