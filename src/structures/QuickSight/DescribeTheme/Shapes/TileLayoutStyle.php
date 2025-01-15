<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GutterStyle|null $Gutter
 * @property MarginStyle|null $Margin
 */
class TileLayoutStyle extends Shape
{
    /**
     * @param array{
     *     Gutter?: GutterStyle|null,
     *     Margin?: MarginStyle|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
