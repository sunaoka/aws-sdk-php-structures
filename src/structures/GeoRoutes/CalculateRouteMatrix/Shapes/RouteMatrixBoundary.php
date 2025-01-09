<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteMatrixBoundaryGeometry $Geometry
 * @property bool $Unbounded
 */
class RouteMatrixBoundary extends Shape
{
    /**
     * @param array{
     *     Geometry?: RouteMatrixBoundaryGeometry,
     *     Unbounded?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
