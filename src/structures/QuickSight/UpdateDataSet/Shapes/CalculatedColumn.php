<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ColumnName
 * @property string $ColumnId
 * @property string $Expression
 */
class CalculatedColumn extends Shape
{
    /**
     * @param array{
     *     ColumnName: string,
     *     ColumnId: string,
     *     Expression: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
