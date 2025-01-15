<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE'|null $LineVisibility
 * @property 'LINEAR'|'SMOOTH'|'STEPPED'|null $LineInterpolation
 * @property 'SOLID'|'DOTTED'|'DASHED'|null $LineStyle
 * @property string|null $LineWidth
 */
class LineChartLineStyleSettings extends Shape
{
    /**
     * @param array{
     *     LineVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     LineInterpolation?: 'LINEAR'|'SMOOTH'|'STEPPED'|null,
     *     LineStyle?: 'SOLID'|'DOTTED'|'DASHED'|null,
     *     LineWidth?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
