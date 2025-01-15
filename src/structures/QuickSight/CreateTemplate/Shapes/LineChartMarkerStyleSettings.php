<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE'|null $MarkerVisibility
 * @property 'CIRCLE'|'TRIANGLE'|'SQUARE'|'DIAMOND'|'ROUNDED_SQUARE'|null $MarkerShape
 * @property string|null $MarkerSize
 * @property string|null $MarkerColor
 */
class LineChartMarkerStyleSettings extends Shape
{
    /**
     * @param array{
     *     MarkerVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     MarkerShape?: 'CIRCLE'|'TRIANGLE'|'SQUARE'|'DIAMOND'|'ROUNDED_SQUARE'|null,
     *     MarkerSize?: string|null,
     *     MarkerColor?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
