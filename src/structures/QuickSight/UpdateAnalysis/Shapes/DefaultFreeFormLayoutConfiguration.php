<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FreeFormLayoutCanvasSizeOptions $CanvasSizeOptions
 */
class DefaultFreeFormLayoutConfiguration extends Shape
{
    /**
     * @param array{CanvasSizeOptions: FreeFormLayoutCanvasSizeOptions} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
