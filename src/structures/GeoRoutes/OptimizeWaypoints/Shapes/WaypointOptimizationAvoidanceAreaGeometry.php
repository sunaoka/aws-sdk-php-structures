<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double> $BoundingBox
 */
class WaypointOptimizationAvoidanceAreaGeometry extends Shape
{
    /**
     * @param array{BoundingBox?: list<double>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
