<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PivotTableAggregatedFieldWells|null $PivotTableAggregatedFieldWells
 */
class PivotTableFieldWells extends Shape
{
    /**
     * @param array{PivotTableAggregatedFieldWells?: PivotTableAggregatedFieldWells|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
