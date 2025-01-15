<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GridLayoutElement> $Elements
 * @property GridLayoutCanvasSizeOptions|null $CanvasSizeOptions
 */
class GridLayoutConfiguration extends Shape
{
    /**
     * @param array{
     *     Elements: list<GridLayoutElement>,
     *     CanvasSizeOptions?: GridLayoutCanvasSizeOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
