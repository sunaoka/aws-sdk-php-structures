<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Corridor $Corridor
 * @property list<double> $BoundingBox
 * @property list<list<list<double>>> $Polygon
 * @property PolylineCorridor $PolylineCorridor
 * @property list<string> $PolylinePolygon
 */
class RouteAvoidanceAreaGeometry extends Shape
{
    /**
     * @param array{
     *     Corridor?: Corridor,
     *     BoundingBox?: list<double>,
     *     Polygon?: list<list<list<double>>>,
     *     PolylineCorridor?: PolylineCorridor,
     *     PolylinePolygon?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
