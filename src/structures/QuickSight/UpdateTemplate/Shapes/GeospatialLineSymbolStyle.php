<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeospatialColor|null $FillColor
 * @property GeospatialLineWidth|null $LineWidth
 */
class GeospatialLineSymbolStyle extends Shape
{
    /**
     * @param array{
     *     FillColor?: GeospatialColor|null,
     *     LineWidth?: GeospatialLineWidth|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
