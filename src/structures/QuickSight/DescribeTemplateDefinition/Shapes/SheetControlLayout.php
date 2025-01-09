<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SheetControlLayoutConfiguration $Configuration
 */
class SheetControlLayout extends Shape
{
    /**
     * @param array{Configuration: SheetControlLayoutConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
