<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeospatialLineSymbolStyle $LineSymbolStyle
 */
class GeospatialLineStyle extends Shape
{
    /**
     * @param array{LineSymbolStyle?: GeospatialLineSymbolStyle} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
