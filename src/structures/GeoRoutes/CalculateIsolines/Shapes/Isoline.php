<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<IsolineConnection> $Connections
 * @property int $DistanceThreshold
 * @property list<IsolineShapeGeometry> $Geometries
 * @property int $TimeThreshold
 */
class Isoline extends Shape
{
    /**
     * @param array{
     *     Connections: list<IsolineConnection>,
     *     DistanceThreshold?: int,
     *     Geometries: list<IsolineShapeGeometry>,
     *     TimeThreshold?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
