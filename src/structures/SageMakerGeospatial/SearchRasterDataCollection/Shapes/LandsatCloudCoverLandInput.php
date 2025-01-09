<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\SearchRasterDataCollection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $LowerBound
 * @property float $UpperBound
 */
class LandsatCloudCoverLandInput extends Shape
{
    /**
     * @param array{
     *     LowerBound: float,
     *     UpperBound: float
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
