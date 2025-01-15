<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OutputResolutionStackInput|null $OutputResolution
 * @property list<string>|null $TargetBands
 */
class StackConfigInput extends Shape
{
    /**
     * @param array{
     *     OutputResolution?: OutputResolutionStackInput|null,
     *     TargetBands?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
