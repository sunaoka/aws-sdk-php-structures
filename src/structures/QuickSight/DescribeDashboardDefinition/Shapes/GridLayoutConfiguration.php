<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GridLayoutElement> $Elements
 * @property GridLayoutCanvasSizeOptions $CanvasSizeOptions
 */
class GridLayoutConfiguration extends Shape
{
    /**
     * @param array{
     *     Elements: list<GridLayoutElement>,
     *     CanvasSizeOptions?: GridLayoutCanvasSizeOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
