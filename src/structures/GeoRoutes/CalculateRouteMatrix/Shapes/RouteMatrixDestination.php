<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteMatrixDestinationOptions|null $Options
 * @property list<double> $Position
 */
class RouteMatrixDestination extends Shape
{
    /**
     * @param array{
     *     Options?: RouteMatrixDestinationOptions|null,
     *     Position: list<double>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
