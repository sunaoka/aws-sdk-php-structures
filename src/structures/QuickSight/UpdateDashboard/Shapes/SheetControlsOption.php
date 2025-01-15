<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EXPANDED'|'COLLAPSED'|null $VisibilityState
 */
class SheetControlsOption extends Shape
{
    /**
     * @param array{VisibilityState?: 'EXPANDED'|'COLLAPSED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
