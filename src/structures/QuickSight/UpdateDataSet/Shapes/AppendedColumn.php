<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ColumnName
 * @property string $NewColumnId
 */
class AppendedColumn extends Shape
{
    /**
     * @param array{
     *     ColumnName: string,
     *     NewColumnId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
