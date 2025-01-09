<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PivotTableAggregatedFieldWells $PivotTableAggregatedFieldWells
 */
class PivotTableFieldWells extends Shape
{
    /**
     * @param array{PivotTableAggregatedFieldWells?: PivotTableAggregatedFieldWells} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
