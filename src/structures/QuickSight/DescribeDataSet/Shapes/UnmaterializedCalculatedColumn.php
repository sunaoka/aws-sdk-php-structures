<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ColumnId
 * @property string $ColumnName
 * @property string $Expression
 * @property 'STRING'|'INTEGER'|'DECIMAL'|'DATETIME'|null $Type
 * @property 'FLOAT'|'FIXED'|null $SubType
 */
class UnmaterializedCalculatedColumn extends Shape
{
    /**
     * @param array{
     *     ColumnId: string,
     *     ColumnName: string,
     *     Expression: string,
     *     Type?: 'STRING'|'INTEGER'|'DECIMAL'|'DATETIME'|null,
     *     SubType?: 'FLOAT'|'FIXED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
