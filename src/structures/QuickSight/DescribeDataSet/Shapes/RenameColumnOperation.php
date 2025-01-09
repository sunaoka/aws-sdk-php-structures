<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ColumnName
 * @property string $NewColumnName
 */
class RenameColumnOperation extends Shape
{
    /**
     * @param array{
     *     ColumnName: string,
     *     NewColumnName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
