<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GutterStyle $Gutter
 * @property MarginStyle $Margin
 */
class TileLayoutStyle extends Shape
{
    /**
     * @param array{
     *     Gutter?: GutterStyle,
     *     Margin?: MarginStyle
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
