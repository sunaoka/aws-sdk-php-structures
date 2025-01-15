<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FIXED'|'RESPONSIVE' $ResizeOption
 * @property string|null $OptimizedViewPortWidth
 */
class GridLayoutScreenCanvasSizeOptions extends Shape
{
    /**
     * @param array{
     *     ResizeOption: 'FIXED'|'RESPONSIVE',
     *     OptimizedViewPortWidth?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
