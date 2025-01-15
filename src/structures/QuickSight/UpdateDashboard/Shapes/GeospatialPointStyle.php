<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeospatialCircleSymbolStyle|null $CircleSymbolStyle
 */
class GeospatialPointStyle extends Shape
{
    /**
     * @param array{CircleSymbolStyle?: GeospatialCircleSymbolStyle|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
