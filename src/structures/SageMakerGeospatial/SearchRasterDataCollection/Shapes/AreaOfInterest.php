<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\SearchRasterDataCollection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AreaOfInterestGeometry $AreaOfInterestGeometry
 */
class AreaOfInterest extends Shape
{
    /**
     * @param array{AreaOfInterestGeometry?: AreaOfInterestGeometry} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
