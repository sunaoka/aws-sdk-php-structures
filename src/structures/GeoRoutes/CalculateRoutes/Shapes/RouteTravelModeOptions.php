<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteCarOptions $Car
 * @property RoutePedestrianOptions $Pedestrian
 * @property RouteScooterOptions $Scooter
 * @property RouteTruckOptions $Truck
 */
class RouteTravelModeOptions extends Shape
{
    /**
     * @param array{
     *     Car?: RouteCarOptions,
     *     Pedestrian?: RoutePedestrianOptions,
     *     Scooter?: RouteScooterOptions,
     *     Truck?: RouteTruckOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
