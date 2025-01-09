<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE' $MarkerVisibility
 * @property 'CIRCLE'|'TRIANGLE'|'SQUARE'|'DIAMOND'|'ROUNDED_SQUARE' $MarkerShape
 * @property string $MarkerSize
 * @property string $MarkerColor
 */
class LineChartMarkerStyleSettings extends Shape
{
    /**
     * @param array{
     *     MarkerVisibility?: 'HIDDEN'|'VISIBLE',
     *     MarkerShape?: 'CIRCLE'|'TRIANGLE'|'SQUARE'|'DIAMOND'|'ROUNDED_SQUARE',
     *     MarkerSize?: string,
     *     MarkerColor?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
