<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StartEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OutputResolutionStackInput $OutputResolution
 * @property list<string> $TargetBands
 */
class StackConfigInput extends Shape
{
    /**
     * @param array{
     *     OutputResolution?: OutputResolutionStackInput,
     *     TargetBands?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
