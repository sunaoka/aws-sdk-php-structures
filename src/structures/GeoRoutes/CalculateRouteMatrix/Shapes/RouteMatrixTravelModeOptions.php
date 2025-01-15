<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteMatrixCarOptions|null $Car
 * @property RouteMatrixScooterOptions|null $Scooter
 * @property RouteMatrixTruckOptions|null $Truck
 */
class RouteMatrixTravelModeOptions extends Shape
{
    /**
     * @param array{
     *     Car?: RouteMatrixCarOptions|null,
     *     Scooter?: RouteMatrixScooterOptions|null,
     *     Truck?: RouteMatrixTruckOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
