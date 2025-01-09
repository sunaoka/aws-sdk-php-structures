<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FreeFormLayoutElement> $Elements
 * @property FreeFormLayoutCanvasSizeOptions $CanvasSizeOptions
 */
class FreeFormLayoutConfiguration extends Shape
{
    /**
     * @param array{
     *     Elements: list<FreeFormLayoutElement>,
     *     CanvasSizeOptions?: FreeFormLayoutCanvasSizeOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
