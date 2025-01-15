<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteMatrixOriginOptions|null $Options
 * @property list<double> $Position
 */
class RouteMatrixOrigin extends Shape
{
    /**
     * @param array{
     *     Options?: RouteMatrixOriginOptions|null,
     *     Position: list<double>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
