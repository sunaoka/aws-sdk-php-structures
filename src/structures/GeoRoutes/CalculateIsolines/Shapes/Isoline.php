<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<IsolineConnection> $Connections
 * @property int<0, 4294967295>|null $DistanceThreshold
 * @property list<IsolineShapeGeometry> $Geometries
 * @property int<0, 4294967295>|null $TimeThreshold
 */
class Isoline extends Shape
{
    /**
     * @param array{
     *     Connections: list<IsolineConnection>,
     *     DistanceThreshold?: int<0, 4294967295>|null,
     *     Geometries: list<IsolineShapeGeometry>,
     *     TimeThreshold?: int<0, 4294967295>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
