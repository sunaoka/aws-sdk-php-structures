<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeospatialColor|null $FillColor
 * @property GeospatialColor|null $StrokeColor
 * @property GeospatialLineWidth|null $StrokeWidth
 */
class GeospatialPolygonSymbolStyle extends Shape
{
    /**
     * @param array{
     *     FillColor?: GeospatialColor|null,
     *     StrokeColor?: GeospatialColor|null,
     *     StrokeWidth?: GeospatialLineWidth|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
