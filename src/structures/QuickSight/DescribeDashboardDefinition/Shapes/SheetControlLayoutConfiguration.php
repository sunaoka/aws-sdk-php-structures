<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GridLayoutConfiguration|null $GridLayout
 */
class SheetControlLayoutConfiguration extends Shape
{
    /**
     * @param array{GridLayout?: GridLayoutConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
