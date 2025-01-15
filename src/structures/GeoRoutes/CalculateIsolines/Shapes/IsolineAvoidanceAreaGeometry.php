<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double>|null $BoundingBox
 * @property Corridor|null $Corridor
 * @property list<list<list<double>>>|null $Polygon
 * @property PolylineCorridor|null $PolylineCorridor
 * @property list<string>|null $PolylinePolygon
 */
class IsolineAvoidanceAreaGeometry extends Shape
{
    /**
     * @param array{
     *     BoundingBox?: list<double>|null,
     *     Corridor?: Corridor|null,
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
