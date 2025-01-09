<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SectionBasedLayoutPaperCanvasSizeOptions $PaperCanvasSizeOptions
 */
class SectionBasedLayoutCanvasSizeOptions extends Shape
{
    /**
     * @param array{PaperCanvasSizeOptions?: SectionBasedLayoutPaperCanvasSizeOptions} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
