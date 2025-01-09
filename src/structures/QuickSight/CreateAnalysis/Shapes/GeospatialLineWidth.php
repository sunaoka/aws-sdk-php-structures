<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $LineWidth
 */
class GeospatialLineWidth extends Shape
{
    /**
     * @param array{LineWidth?: double} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
