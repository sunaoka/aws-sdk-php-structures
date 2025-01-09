<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteMatrixCarOptions $Car
 * @property RouteMatrixScooterOptions $Scooter
 * @property RouteMatrixTruckOptions $Truck
 */
class RouteMatrixTravelModeOptions extends Shape
{
    /**
     * @param array{
     *     Car?: RouteMatrixCarOptions,
     *     Scooter?: RouteMatrixScooterOptions,
     *     Truck?: RouteMatrixTruckOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
