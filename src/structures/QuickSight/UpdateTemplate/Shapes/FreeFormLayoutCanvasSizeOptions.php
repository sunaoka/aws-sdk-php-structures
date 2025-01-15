<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FreeFormLayoutScreenCanvasSizeOptions|null $ScreenCanvasSizeOptions
 */
class FreeFormLayoutCanvasSizeOptions extends Shape
{
    /**
     * @param array{ScreenCanvasSizeOptions?: FreeFormLayoutScreenCanvasSizeOptions|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
