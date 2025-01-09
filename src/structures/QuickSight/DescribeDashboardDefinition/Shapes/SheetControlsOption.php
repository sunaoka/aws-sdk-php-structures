<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EXPANDED'|'COLLAPSED' $VisibilityState
 */
class SheetControlsOption extends Shape
{
    /**
     * @param array{VisibilityState?: 'EXPANDED'|'COLLAPSED'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
