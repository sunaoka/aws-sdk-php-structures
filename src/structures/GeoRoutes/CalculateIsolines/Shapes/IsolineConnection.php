<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $FromPolygonIndex
 * @property IsolineConnectionGeometry $Geometry
 * @property int $ToPolygonIndex
 */
class IsolineConnection extends Shape
{
    /**
     * @param array{
     *     FromPolygonIndex: int,
     *     Geometry: IsolineConnectionGeometry,
     *     ToPolygonIndex: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
