<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StartEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MultiPolygonGeometryInput $MultiPolygonGeometry
 * @property PolygonGeometryInput $PolygonGeometry
 */
class AreaOfInterestGeometry extends Shape
{
    /**
     * @param array{
     *     MultiPolygonGeometry?: MultiPolygonGeometryInput,
     *     PolygonGeometry?: PolygonGeometryInput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
