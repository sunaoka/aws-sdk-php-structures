<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<list<list<list<double>>>> $Coordinates
 */
class MultiPolygonGeometryInput extends Shape
{
    /**
     * @param array{Coordinates: list<list<list<list<double>>>>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
