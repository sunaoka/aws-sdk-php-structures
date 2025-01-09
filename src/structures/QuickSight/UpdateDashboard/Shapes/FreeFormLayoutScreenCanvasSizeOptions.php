<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OptimizedViewPortWidth
 */
class FreeFormLayoutScreenCanvasSizeOptions extends Shape
{
    /**
     * @param array{OptimizedViewPortWidth: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
