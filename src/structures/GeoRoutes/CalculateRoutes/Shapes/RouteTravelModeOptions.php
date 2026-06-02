<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteCarOptions|null $Car
 * @property RoutePedestrianOptions|null $Pedestrian
 * @property RouteScooterOptions|null $Scooter
 * @property RouteTruckOptions|null $Truck
 * @property RouteIntermodalOptions|null $Intermodal
 * @property RouteTransitOptions|null $Transit
 */
class RouteTravelModeOptions extends Shape
{
    /**
     * @param array{
     *     Car?: RouteCarOptions|null,
     *     Pedestrian?: RoutePedestrianOptions|null,
     *     Scooter?: RouteScooterOptions|null,
     *     Truck?: RouteTruckOptions|null,
     *     Intermodal?: RouteIntermodalOptions|null,
     *     Transit?: RouteTransitOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
