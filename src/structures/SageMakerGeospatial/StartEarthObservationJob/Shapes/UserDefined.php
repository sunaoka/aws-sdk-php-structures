<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StartEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'METERS' $Unit
 * @property float $Value
 */
class UserDefined extends Shape
{
    /**
     * @param array{
     *     Unit: 'METERS',
     *     Value: float
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
