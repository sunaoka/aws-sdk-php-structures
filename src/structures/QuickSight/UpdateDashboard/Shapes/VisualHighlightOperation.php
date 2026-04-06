<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DATA_POINT_CLICK'|'DATA_POINT_HOVER'|'NONE' $Trigger
 */
class VisualHighlightOperation extends Shape
{
    /**
     * @param array{Trigger: 'DATA_POINT_CLICK'|'DATA_POINT_HOVER'|'NONE'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
