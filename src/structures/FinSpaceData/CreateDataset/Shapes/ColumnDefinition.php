<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STRING'|'CHAR'|'INTEGER'|'TINYINT'|'SMALLINT'|'BIGINT'|'FLOAT'|'DOUBLE'|'DATE'|'DATETIME'|'BOOLEAN'|'BINARY'|null $dataType
 * @property string|null $columnName
 * @property string|null $columnDescription
 */
class ColumnDefinition extends Shape
{
    /**
     * @param array{
     *     dataType?: 'STRING'|'CHAR'|'INTEGER'|'TINYINT'|'SMALLINT'|'BIGINT'|'FLOAT'|'DOUBLE'|'DATE'|'DATETIME'|'BOOLEAN'|'BINARY'|null,
     *     columnName?: string|null,
     *     columnDescription?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
