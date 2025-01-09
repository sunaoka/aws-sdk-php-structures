<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeospatialColor $FillColor
 * @property GeospatialColor $StrokeColor
 * @property GeospatialLineWidth $StrokeWidth
 * @property GeospatialCircleRadius $CircleRadius
 */
class GeospatialCircleSymbolStyle extends Shape
{
    /**
     * @param array{
     *     FillColor?: GeospatialColor,
     *     StrokeColor?: GeospatialColor,
     *     StrokeWidth?: GeospatialLineWidth,
     *     CircleRadius?: GeospatialCircleRadius
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
