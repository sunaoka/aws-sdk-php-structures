<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\SearchRasterDataCollection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MultiPolygonGeometryInput|null $MultiPolygonGeometry
 * @property PolygonGeometryInput|null $PolygonGeometry
 */
class AreaOfInterestGeometry extends Shape
{
    /**
     * @param array{
     *     MultiPolygonGeometry?: MultiPolygonGeometryInput|null,
     *     PolygonGeometry?: PolygonGeometryInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
