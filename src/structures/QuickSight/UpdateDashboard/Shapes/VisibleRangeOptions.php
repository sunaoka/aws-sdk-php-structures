<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PercentVisibleRange|null $PercentRange
 */
class VisibleRangeOptions extends Shape
{
    /**
     * @param array{PercentRange?: PercentVisibleRange|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
