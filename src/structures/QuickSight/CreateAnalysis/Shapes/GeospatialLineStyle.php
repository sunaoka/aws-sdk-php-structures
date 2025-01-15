<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeospatialLineSymbolStyle|null $LineSymbolStyle
 */
class GeospatialLineStyle extends Shape
{
    /**
     * @param array{LineSymbolStyle?: GeospatialLineSymbolStyle|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
