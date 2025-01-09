<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HistogramAggregatedFieldWells $HistogramAggregatedFieldWells
 */
class HistogramFieldWells extends Shape
{
    /**
     * @param array{HistogramAggregatedFieldWells?: HistogramAggregatedFieldWells} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
