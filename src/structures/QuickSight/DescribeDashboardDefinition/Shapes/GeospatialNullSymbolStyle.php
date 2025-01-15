<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FillColor
 * @property string|null $StrokeColor
 * @property double|null $StrokeWidth
 */
class GeospatialNullSymbolStyle extends Shape
{
    /**
     * @param array{
     *     FillColor?: string|null,
     *     StrokeColor?: string|null,
     *     StrokeWidth?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
