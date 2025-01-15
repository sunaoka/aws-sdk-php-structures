<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\SnapToRoads\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<list<double>>|null $LineString
 * @property string|null $Polyline
 */
class RoadSnapSnappedGeometry extends Shape
{
    /**
     * @param array{
     *     LineString?: list<list<double>>|null,
     *     Polyline?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
