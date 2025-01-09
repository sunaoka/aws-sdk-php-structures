<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteFerryPlace $Place
 * @property string $Time
 */
class RouteFerryDeparture extends Shape
{
    /**
     * @param array{
     *     Place: RouteFerryPlace,
     *     Time?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
