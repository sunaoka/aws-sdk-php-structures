<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LayoutConfiguration $Configuration
 */
class Layout extends Shape
{
    /**
     * @param array{Configuration: LayoutConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
