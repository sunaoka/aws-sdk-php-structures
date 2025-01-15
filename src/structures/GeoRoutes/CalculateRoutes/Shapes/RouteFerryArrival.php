<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteFerryPlace $Place
 * @property string|null $Time
 */
class RouteFerryArrival extends Shape
{
    /**
     * @param array{
     *     Place: RouteFerryPlace,
     *     Time?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
