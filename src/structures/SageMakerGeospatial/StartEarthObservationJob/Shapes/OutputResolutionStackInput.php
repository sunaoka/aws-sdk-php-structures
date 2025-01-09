<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StartEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIGHEST'|'LOWEST'|'AVERAGE' $Predefined
 * @property UserDefined $UserDefined
 */
class OutputResolutionStackInput extends Shape
{
    /**
     * @param array{
     *     Predefined?: 'HIGHEST'|'LOWEST'|'AVERAGE',
     *     UserDefined?: UserDefined
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
