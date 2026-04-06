<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteMatrixAutoCircle|null $AutoCircle
 * @property Circle|null $Circle
 * @property list<double>|null $BoundingBox
 * @property list<list<list<double>>>|null $Polygon
 */
class RouteMatrixBoundaryGeometry extends Shape
{
    /**
     * @param array{
     *     AutoCircle?: RouteMatrixAutoCircle|null,
     *     Circle?: Circle|null,
     *     BoundingBox?: list<double>|null,
     *     Polygon?: list<list<list<double>>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
