<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GridLayoutConfiguration $GridLayout
 */
class SheetControlLayoutConfiguration extends Shape
{
    /**
     * @param array{GridLayout?: GridLayoutConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
