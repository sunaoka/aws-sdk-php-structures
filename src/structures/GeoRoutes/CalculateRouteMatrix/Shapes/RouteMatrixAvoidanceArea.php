<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteMatrixAvoidanceAreaGeometry $Geometry
 */
class RouteMatrixAvoidanceArea extends Shape
{
    /**
     * @param array{Geometry: RouteMatrixAvoidanceAreaGeometry} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
