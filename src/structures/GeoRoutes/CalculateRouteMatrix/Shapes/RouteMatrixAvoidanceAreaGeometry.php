<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double>|null $BoundingBox
 * @property list<list<list<double>>>|null $Polygon
 * @property list<string>|null $PolylinePolygon
 */
class RouteMatrixAvoidanceAreaGeometry extends Shape
{
    /**
     * @param array{
     *     BoundingBox?: list<double>|null,
     *     Polygon?: list<list<list<double>>>|null,
     *     PolylinePolygon?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
