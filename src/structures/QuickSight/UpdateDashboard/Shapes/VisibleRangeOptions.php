<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PercentVisibleRange $PercentRange
 */
class VisibleRangeOptions extends Shape
{
    /**
     * @param array{PercentRange?: PercentVisibleRange} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
