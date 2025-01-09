<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CategoryInnerFilter $CategoryInnerFilter
 */
class InnerFilter extends Shape
{
    /**
     * @param array{CategoryInnerFilter?: CategoryInnerFilter} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
