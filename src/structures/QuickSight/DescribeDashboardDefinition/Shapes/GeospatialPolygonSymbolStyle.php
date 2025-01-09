<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeospatialColor $FillColor
 * @property GeospatialColor $StrokeColor
 * @property GeospatialLineWidth $StrokeWidth
 */
class GeospatialPolygonSymbolStyle extends Shape
{
    /**
     * @param array{
     *     FillColor?: GeospatialColor,
     *     StrokeColor?: GeospatialColor,
     *     StrokeWidth?: GeospatialLineWidth
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
