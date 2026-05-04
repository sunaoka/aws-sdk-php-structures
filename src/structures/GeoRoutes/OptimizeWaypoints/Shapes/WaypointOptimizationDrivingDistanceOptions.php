<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<5, 50000> $DrivingDistance
 */
class WaypointOptimizationDrivingDistanceOptions extends Shape
{
    /**
     * @param array{DrivingDistance: int<5, 50000>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
