<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldSortOptions> $CategorySort
 */
class FilledMapSortConfiguration extends Shape
{
    /**
     * @param array{CategorySort?: list<FieldSortOptions>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
