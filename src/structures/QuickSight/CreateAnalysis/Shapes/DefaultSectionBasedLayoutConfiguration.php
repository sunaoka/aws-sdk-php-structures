<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SectionBasedLayoutCanvasSizeOptions $CanvasSizeOptions
 */
class DefaultSectionBasedLayoutConfiguration extends Shape
{
    /**
     * @param array{CanvasSizeOptions: SectionBasedLayoutCanvasSizeOptions} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
