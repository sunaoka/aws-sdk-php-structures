<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteMatrixBoundaryGeometry|null $Geometry
 * @property bool|null $Unbounded
 */
class RouteMatrixBoundary extends Shape
{
    /**
     * @param array{
     *     Geometry?: RouteMatrixBoundaryGeometry|null,
     *     Unbounded?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
