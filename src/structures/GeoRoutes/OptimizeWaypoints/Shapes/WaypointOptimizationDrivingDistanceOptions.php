<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4294967295> $DrivingDistance
 */
class WaypointOptimizationDrivingDistanceOptions extends Shape
{
    /**
     * @param array{DrivingDistance: int<0, 4294967295>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
