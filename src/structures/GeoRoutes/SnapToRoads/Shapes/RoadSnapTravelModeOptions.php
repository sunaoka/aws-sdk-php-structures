<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\SnapToRoads\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RoadSnapTruckOptions $Truck
 */
class RoadSnapTravelModeOptions extends Shape
{
    /**
     * @param array{Truck?: RoadSnapTruckOptions} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
