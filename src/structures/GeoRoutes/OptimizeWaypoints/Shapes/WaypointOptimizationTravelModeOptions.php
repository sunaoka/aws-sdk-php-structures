<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WaypointOptimizationPedestrianOptions $Pedestrian
 * @property WaypointOptimizationTruckOptions $Truck
 */
class WaypointOptimizationTravelModeOptions extends Shape
{
    /**
     * @param array{
     *     Pedestrian?: WaypointOptimizationPedestrianOptions,
     *     Truck?: WaypointOptimizationTruckOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
