<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FillColor
 * @property string $StrokeColor
 * @property double $StrokeWidth
 */
class GeospatialNullSymbolStyle extends Shape
{
    /**
     * @param array{
     *     FillColor?: string,
     *     StrokeColor?: string,
     *     StrokeWidth?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
