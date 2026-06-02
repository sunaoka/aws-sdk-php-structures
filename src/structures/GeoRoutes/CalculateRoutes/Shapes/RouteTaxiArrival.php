<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteTaxiPlace $Place
 * @property string|null $Time
 */
class RouteTaxiArrival extends Shape
{
    /**
     * @param array{
     *     Place: RouteTaxiPlace,
     *     Time?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
