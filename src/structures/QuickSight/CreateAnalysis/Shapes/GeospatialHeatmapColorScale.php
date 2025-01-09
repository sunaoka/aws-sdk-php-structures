<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GeospatialHeatmapDataColor> $Colors
 */
class GeospatialHeatmapColorScale extends Shape
{
    /**
     * @param array{Colors?: list<GeospatialHeatmapDataColor>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
