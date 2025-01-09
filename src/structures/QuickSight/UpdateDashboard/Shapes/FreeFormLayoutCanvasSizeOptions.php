<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FreeFormLayoutScreenCanvasSizeOptions $ScreenCanvasSizeOptions
 */
class FreeFormLayoutCanvasSizeOptions extends Shape
{
    /**
     * @param array{ScreenCanvasSizeOptions?: FreeFormLayoutScreenCanvasSizeOptions} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
