<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StartEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Operation>|null $Operations
 */
class CustomIndicesInput extends Shape
{
    /**
     * @param array{Operations?: list<Operation>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
