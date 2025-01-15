<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GeospatialHeatmapDataColor>|null $Colors
 */
class GeospatialHeatmapColorScale extends Shape
{
    /**
     * @param array{Colors?: list<GeospatialHeatmapDataColor>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
