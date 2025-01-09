<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HeatMapAggregatedFieldWells $HeatMapAggregatedFieldWells
 */
class HeatMapFieldWells extends Shape
{
    /**
     * @param array{HeatMapAggregatedFieldWells?: HeatMapAggregatedFieldWells} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
