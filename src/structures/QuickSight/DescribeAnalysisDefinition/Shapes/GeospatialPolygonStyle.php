<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeospatialPolygonSymbolStyle $PolygonSymbolStyle
 */
class GeospatialPolygonStyle extends Shape
{
    /**
     * @param array{PolygonSymbolStyle?: GeospatialPolygonSymbolStyle} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
