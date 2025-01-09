<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PivotFieldSortOptions> $FieldSortOptions
 */
class PivotTableSortConfiguration extends Shape
{
    /**
     * @param array{FieldSortOptions?: list<PivotFieldSortOptions>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
