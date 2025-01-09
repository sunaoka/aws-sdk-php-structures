<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeospatialMapAggregatedFieldWells $GeospatialMapAggregatedFieldWells
 */
class GeospatialMapFieldWells extends Shape
{
    /**
     * @param array{GeospatialMapAggregatedFieldWells?: GeospatialMapAggregatedFieldWells} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
