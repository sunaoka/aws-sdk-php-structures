<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteMatrixOriginOptions $Options
 * @property list<double> $Position
 */
class RouteMatrixOrigin extends Shape
{
    /**
     * @param array{
     *     Options?: RouteMatrixOriginOptions,
     *     Position: list<double>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
