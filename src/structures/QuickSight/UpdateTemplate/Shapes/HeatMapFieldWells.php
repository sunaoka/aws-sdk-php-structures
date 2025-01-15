<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HeatMapAggregatedFieldWells|null $HeatMapAggregatedFieldWells
 */
class HeatMapFieldWells extends Shape
{
    /**
     * @param array{HeatMapAggregatedFieldWells?: HeatMapAggregatedFieldWells|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
