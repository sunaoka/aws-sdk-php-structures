<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Show
 */
class GutterStyle extends Shape
{
    /**
     * @param array{Show?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
