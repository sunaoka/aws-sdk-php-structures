<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GridLayoutScreenCanvasSizeOptions $ScreenCanvasSizeOptions
 */
class GridLayoutCanvasSizeOptions extends Shape
{
    /**
     * @param array{ScreenCanvasSizeOptions?: GridLayoutScreenCanvasSizeOptions} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
