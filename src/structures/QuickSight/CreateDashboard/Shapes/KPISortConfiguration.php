<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldSortOptions>|null $TrendGroupSort
 */
class KPISortConfiguration extends Shape
{
    /**
     * @param array{TrendGroupSort?: list<FieldSortOptions>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
