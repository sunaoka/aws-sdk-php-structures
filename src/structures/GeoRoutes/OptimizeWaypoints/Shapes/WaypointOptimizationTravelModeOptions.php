<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WaypointOptimizationPedestrianOptions|null $Pedestrian
 * @property WaypointOptimizationTruckOptions|null $Truck
 */
class WaypointOptimizationTravelModeOptions extends Shape
{
    /**
     * @param array{
     *     Pedestrian?: WaypointOptimizationPedestrianOptions|null,
     *     Truck?: WaypointOptimizationTruckOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
