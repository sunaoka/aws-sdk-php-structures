<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ColumnName
 * @property 'STRING'|'INTEGER'|'DECIMAL'|'DATETIME' $NewColumnType
 * @property 'FLOAT'|'FIXED'|null $SubType
 * @property string|null $Format
 */
class CastColumnTypeOperation extends Shape
{
    /**
     * @param array{
     *     ColumnName: string,
     *     NewColumnType: 'STRING'|'INTEGER'|'DECIMAL'|'DATETIME',
     *     SubType?: 'FLOAT'|'FIXED'|null,
     *     Format?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
