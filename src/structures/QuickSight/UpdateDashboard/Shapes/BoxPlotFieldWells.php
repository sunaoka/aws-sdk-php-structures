<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BoxPlotAggregatedFieldWells $BoxPlotAggregatedFieldWells
 */
class BoxPlotFieldWells extends Shape
{
    /**
     * @param array{BoxPlotAggregatedFieldWells?: BoxPlotAggregatedFieldWells} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
