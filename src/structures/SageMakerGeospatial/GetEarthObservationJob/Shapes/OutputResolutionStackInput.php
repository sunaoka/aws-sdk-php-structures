<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIGHEST'|'LOWEST'|'AVERAGE'|null $Predefined
 * @property UserDefined|null $UserDefined
 */
class OutputResolutionStackInput extends Shape
{
    /**
     * @param array{
     *     Predefined?: 'HIGHEST'|'LOWEST'|'AVERAGE'|null,
     *     UserDefined?: UserDefined|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
