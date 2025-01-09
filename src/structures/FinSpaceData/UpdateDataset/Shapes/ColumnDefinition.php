<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\UpdateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STRING'|'CHAR'|'INTEGER'|'TINYINT'|'SMALLINT'|'BIGINT'|'FLOAT'|'DOUBLE'|'DATE'|'DATETIME'|'BOOLEAN'|'BINARY' $dataType
 * @property string $columnName
 * @property string $columnDescription
 */
class ColumnDefinition extends Shape
{
    /**
     * @param array{
     *     dataType?: 'STRING'|'CHAR'|'INTEGER'|'TINYINT'|'SMALLINT'|'BIGINT'|'FLOAT'|'DOUBLE'|'DATE'|'DATETIME'|'BOOLEAN'|'BINARY',
     *     columnName?: string,
     *     columnDescription?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
