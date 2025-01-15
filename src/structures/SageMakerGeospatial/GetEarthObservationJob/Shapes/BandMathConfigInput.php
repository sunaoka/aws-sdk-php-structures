<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomIndicesInput|null $CustomIndices
 * @property list<string>|null $PredefinedIndices
 */
class BandMathConfigInput extends Shape
{
    /**
     * @param array{
     *     CustomIndices?: CustomIndicesInput|null,
     *     PredefinedIndices?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
