<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteMatrixVehicleLicensePlate $LicensePlate
 * @property double $MaxSpeed
 * @property int $Occupancy
 */
class RouteMatrixScooterOptions extends Shape
{
    /**
     * @param array{
     *     LicensePlate?: RouteMatrixVehicleLicensePlate,
     *     MaxSpeed?: double,
     *     Occupancy?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
