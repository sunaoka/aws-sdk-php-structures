<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FieldSort $FieldSort
 * @property ColumnSort $ColumnSort
 */
class FieldSortOptions extends Shape
{
    /**
     * @param array{
     *     FieldSort?: FieldSort,
     *     ColumnSort?: ColumnSort
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
