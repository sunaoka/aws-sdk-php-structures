<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HistogramAggregatedFieldWells|null $HistogramAggregatedFieldWells
 */
class HistogramFieldWells extends Shape
{
    /**
     * @param array{HistogramAggregatedFieldWells?: HistogramAggregatedFieldWells|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
