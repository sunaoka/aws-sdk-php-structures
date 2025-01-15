<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<list<list<double>>>|null $Polygon
 * @property list<string>|null $PolylinePolygon
 */
class IsolineShapeGeometry extends Shape
{
    /**
     * @param array{
     *     Polygon?: list<list<list<double>>>|null,
     *     PolylinePolygon?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
