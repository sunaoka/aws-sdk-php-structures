<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeospatialColor|null $FillColor
 * @property GeospatialColor|null $StrokeColor
 * @property GeospatialLineWidth|null $StrokeWidth
 * @property GeospatialCircleRadius|null $CircleRadius
 */
class GeospatialCircleSymbolStyle extends Shape
{
    /**
     * @param array{
     *     FillColor?: GeospatialColor|null,
     *     StrokeColor?: GeospatialColor|null,
     *     StrokeWidth?: GeospatialLineWidth|null,
     *     CircleRadius?: GeospatialCircleRadius|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
