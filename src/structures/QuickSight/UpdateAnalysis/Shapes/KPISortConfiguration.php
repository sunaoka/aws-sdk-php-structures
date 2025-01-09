<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldSortOptions> $TrendGroupSort
 */
class KPISortConfiguration extends Shape
{
    /**
     * @param array{TrendGroupSort?: list<FieldSortOptions>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
