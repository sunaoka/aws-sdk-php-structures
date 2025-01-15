<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FieldSort|null $FieldSort
 * @property ColumnSort|null $ColumnSort
 */
class FieldSortOptions extends Shape
{
    /**
     * @param array{
     *     FieldSort?: FieldSort|null,
     *     ColumnSort?: ColumnSort|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
