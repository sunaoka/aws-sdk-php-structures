<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double> $BoundingBox
 * @property Corridor $Corridor
 * @property list<list<list<double>>> $Polygon
 * @property PolylineCorridor $PolylineCorridor
 * @property list<string> $PolylinePolygon
 */
class IsolineAvoidanceAreaGeometry extends Shape
{
    /**
     * @param array{
     *     BoundingBox?: list<double>,
     *     Corridor?: Corridor,
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
