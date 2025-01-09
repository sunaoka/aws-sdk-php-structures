<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeospatialHeatmapColorScale $HeatmapColor
 */
class GeospatialHeatmapConfiguration extends Shape
{
    /**
     * @param array{HeatmapColor?: GeospatialHeatmapColorScale} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
