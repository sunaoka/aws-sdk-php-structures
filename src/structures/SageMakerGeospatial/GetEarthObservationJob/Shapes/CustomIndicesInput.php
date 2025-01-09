<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Operation> $Operations
 */
class CustomIndicesInput extends Shape
{
    /**
     * @param array{Operations?: list<Operation>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
