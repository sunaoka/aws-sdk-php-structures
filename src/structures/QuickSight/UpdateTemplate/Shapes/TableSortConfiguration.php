<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldSortOptions> $RowSort
 * @property PaginationConfiguration $PaginationConfiguration
 */
class TableSortConfiguration extends Shape
{
    /**
     * @param array{
     *     RowSort?: list<FieldSortOptions>,
     *     PaginationConfiguration?: PaginationConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
