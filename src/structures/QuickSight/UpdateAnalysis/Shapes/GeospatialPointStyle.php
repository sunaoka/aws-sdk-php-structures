<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeospatialCircleSymbolStyle $CircleSymbolStyle
 */
class GeospatialPointStyle extends Shape
{
    /**
     * @param array{CircleSymbolStyle?: GeospatialCircleSymbolStyle} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
