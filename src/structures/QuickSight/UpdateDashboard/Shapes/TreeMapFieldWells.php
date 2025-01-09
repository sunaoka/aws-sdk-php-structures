<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TreeMapAggregatedFieldWells $TreeMapAggregatedFieldWells
 */
class TreeMapFieldWells extends Shape
{
    /**
     * @param array{TreeMapAggregatedFieldWells?: TreeMapAggregatedFieldWells} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
