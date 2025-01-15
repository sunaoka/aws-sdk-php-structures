<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TreeMapAggregatedFieldWells|null $TreeMapAggregatedFieldWells
 */
class TreeMapFieldWells extends Shape
{
    /**
     * @param array{TreeMapAggregatedFieldWells?: TreeMapAggregatedFieldWells|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
