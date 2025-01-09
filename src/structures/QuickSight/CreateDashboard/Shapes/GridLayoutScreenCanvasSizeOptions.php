<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FIXED'|'RESPONSIVE' $ResizeOption
 * @property string $OptimizedViewPortWidth
 */
class GridLayoutScreenCanvasSizeOptions extends Shape
{
    /**
     * @param array{
     *     ResizeOption: 'FIXED'|'RESPONSIVE',
     *     OptimizedViewPortWidth?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
