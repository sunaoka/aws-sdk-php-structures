<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BorderStyle $Border
 */
class TileStyle extends Shape
{
    /**
     * @param array{Border?: BorderStyle} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
