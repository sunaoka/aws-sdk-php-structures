<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FunnelChartAggregatedFieldWells|null $FunnelChartAggregatedFieldWells
 */
class FunnelChartFieldWells extends Shape
{
    /**
     * @param array{FunnelChartAggregatedFieldWells?: FunnelChartAggregatedFieldWells|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
