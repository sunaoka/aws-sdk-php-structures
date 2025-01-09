<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ColumnName
 * @property 'STRING'|'INTEGER'|'DECIMAL'|'DATETIME' $NewColumnType
 * @property 'FLOAT'|'FIXED' $SubType
 * @property string $Format
 */
class CastColumnTypeOperation extends Shape
{
    /**
     * @param array{
     *     ColumnName: string,
     *     NewColumnType: 'STRING'|'INTEGER'|'DECIMAL'|'DATETIME',
     *     SubType?: 'FLOAT'|'FIXED',
     *     Format?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
