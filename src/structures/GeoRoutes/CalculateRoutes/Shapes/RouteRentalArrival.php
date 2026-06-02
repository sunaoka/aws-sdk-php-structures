<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteRentalPlace $Place
 * @property string|null $Time
 */
class RouteRentalArrival extends Shape
{
    /**
     * @param array{
     *     Place: RouteRentalPlace,
     *     Time?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
