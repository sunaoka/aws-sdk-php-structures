<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeospatialColor $FillColor
 * @property GeospatialLineWidth $LineWidth
 */
class GeospatialLineSymbolStyle extends Shape
{
    /**
     * @param array{
     *     FillColor?: GeospatialColor,
     *     LineWidth?: GeospatialLineWidth
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
