<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteMatrixAutoCircle $AutoCircle
 * @property Circle $Circle
 * @property list<double> $BoundingBox
 * @property list<list<list<double>>> $Polygon
 */
class RouteMatrixBoundaryGeometry extends Shape
{
    /**
     * @param array{
     *     AutoCircle?: RouteMatrixAutoCircle,
     *     Circle?: Circle,
     *     BoundingBox?: list<double>,
     *     Polygon?: list<list<list<double>>>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
