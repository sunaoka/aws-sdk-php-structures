<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteVehiclePlace $Place
 * @property string $Time
 */
class RouteVehicleArrival extends Shape
{
    /**
     * @param array{
     *     Place: RouteVehiclePlace,
     *     Time?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
