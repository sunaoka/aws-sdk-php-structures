<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeospatialPointLayer $PointLayer
 * @property GeospatialLineLayer $LineLayer
 * @property GeospatialPolygonLayer $PolygonLayer
 */
class GeospatialLayerDefinition extends Shape
{
    /**
     * @param array{
     *     PointLayer?: GeospatialPointLayer,
     *     LineLayer?: GeospatialLineLayer,
     *     PolygonLayer?: GeospatialPolygonLayer
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
