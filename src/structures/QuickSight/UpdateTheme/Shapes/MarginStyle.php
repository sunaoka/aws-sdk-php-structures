<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Show
 */
class MarginStyle extends Shape
{
    /**
     * @param array{Show?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
