<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $FromPolygonIndex
 * @property IsolineConnectionGeometry $Geometry
 * @property int<0, max> $ToPolygonIndex
 */
class IsolineConnection extends Shape
{
    /**
     * @param array{
     *     FromPolygonIndex: int<0, max>,
     *     Geometry: IsolineConnectionGeometry,
     *     ToPolygonIndex: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
