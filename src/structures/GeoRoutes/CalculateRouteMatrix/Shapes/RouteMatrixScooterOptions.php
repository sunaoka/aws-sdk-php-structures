<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteMatrixVehicleLicensePlate $LicensePlate
 * @property double $MaxSpeed
 * @property int<1, max> $Occupancy
 */
class RouteMatrixScooterOptions extends Shape
{
    /**
     * @param array{
     *     LicensePlate?: RouteMatrixVehicleLicensePlate,
     *     MaxSpeed?: double,
     *     Occupancy?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
