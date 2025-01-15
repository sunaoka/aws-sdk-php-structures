<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PivotFieldSortOptions>|null $FieldSortOptions
 */
class PivotTableSortConfiguration extends Shape
{
    /**
     * @param array{FieldSortOptions?: list<PivotFieldSortOptions>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
