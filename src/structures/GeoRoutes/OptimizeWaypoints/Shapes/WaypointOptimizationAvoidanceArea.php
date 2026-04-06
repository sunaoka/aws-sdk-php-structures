<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WaypointOptimizationAvoidanceAreaGeometry $Geometry
 */
class WaypointOptimizationAvoidanceArea extends Shape
{
    /**
     * @param array{Geometry: WaypointOptimizationAvoidanceAreaGeometry} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
