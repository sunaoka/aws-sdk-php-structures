<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ComboChartAggregatedFieldWells $ComboChartAggregatedFieldWells
 */
class ComboChartFieldWells extends Shape
{
    /**
     * @param array{ComboChartAggregatedFieldWells?: ComboChartAggregatedFieldWells} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
