<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Property $Property
 */
class PropertyFilter extends Shape
{
    /**
     * @param array{Property: Property} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
