<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\SearchRasterDataCollection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<list<list<double>>> $Coordinates
 */
class PolygonGeometryInput extends Shape
{
    /**
     * @param array{Coordinates: list<list<list<double>>>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
