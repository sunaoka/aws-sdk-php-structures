<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Corridor|null $Corridor
 * @property list<double>|null $BoundingBox
 * @property list<list<list<double>>>|null $Polygon
 * @property PolylineCorridor|null $PolylineCorridor
 * @property list<string>|null $PolylinePolygon
 */
class RouteAvoidanceAreaGeometry extends Shape
{
    /**
     * @param array{
     *     Corridor?: Corridor|null,
     *     BoundingBox?: list<double>|null,
     *     Polygon?: list<list<list<double>>>|null,
     *     PolylineCorridor?: PolylineCorridor|null,
     *     PolylinePolygon?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
