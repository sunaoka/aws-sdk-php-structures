<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeospatialPointLayer|null $PointLayer
 * @property GeospatialLineLayer|null $LineLayer
 * @property GeospatialPolygonLayer|null $PolygonLayer
 */
class GeospatialLayerDefinition extends Shape
{
    /**
     * @param array{
     *     PointLayer?: GeospatialPointLayer|null,
     *     LineLayer?: GeospatialLineLayer|null,
     *     PolygonLayer?: GeospatialPolygonLayer|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
