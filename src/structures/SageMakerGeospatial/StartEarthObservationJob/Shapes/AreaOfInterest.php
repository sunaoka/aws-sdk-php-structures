<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StartEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AreaOfInterestGeometry|null $AreaOfInterestGeometry
 */
class AreaOfInterest extends Shape
{
    /**
     * @param array{AreaOfInterestGeometry?: AreaOfInterestGeometry|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
