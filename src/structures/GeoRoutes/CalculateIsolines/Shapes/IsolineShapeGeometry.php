<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<list<list<double>>> $Polygon
 * @property list<string> $PolylinePolygon
 */
class IsolineShapeGeometry extends Shape
{
    /**
     * @param array{
     *     Polygon?: list<list<list<double>>>,
     *     PolylinePolygon?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
