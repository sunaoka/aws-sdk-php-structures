<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StartEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UserDefined $UserDefined
 */
class OutputResolutionResamplingInput extends Shape
{
    /**
     * @param array{UserDefined: UserDefined} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
