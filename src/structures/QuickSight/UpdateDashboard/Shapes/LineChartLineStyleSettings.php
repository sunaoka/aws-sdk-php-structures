<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE' $LineVisibility
 * @property 'LINEAR'|'SMOOTH'|'STEPPED' $LineInterpolation
 * @property 'SOLID'|'DOTTED'|'DASHED' $LineStyle
 * @property string $LineWidth
 */
class LineChartLineStyleSettings extends Shape
{
    /**
     * @param array{
     *     LineVisibility?: 'HIDDEN'|'VISIBLE',
     *     LineInterpolation?: 'LINEAR'|'SMOOTH'|'STEPPED',
     *     LineStyle?: 'SOLID'|'DOTTED'|'DASHED',
     *     LineWidth?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
