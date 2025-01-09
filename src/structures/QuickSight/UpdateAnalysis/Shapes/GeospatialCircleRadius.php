<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Radius
 */
class GeospatialCircleRadius extends Shape
{
    /**
     * @param array{Radius?: double} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
