<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double> $BoundingBox
 * @property list<list<list<double>>> $Polygon
 * @property list<string> $PolylinePolygon
 */
class RouteMatrixAvoidanceAreaGeometry extends Shape
{
    /**
     * @param array{
     *     BoundingBox?: list<double>,
     *     Polygon?: list<list<list<double>>>,
     *     PolylinePolygon?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
