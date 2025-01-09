<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StartEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomIndicesInput $CustomIndices
 * @property list<string> $PredefinedIndices
 */
class BandMathConfigInput extends Shape
{
    /**
     * @param array{
     *     CustomIndices?: CustomIndicesInput,
     *     PredefinedIndices?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
