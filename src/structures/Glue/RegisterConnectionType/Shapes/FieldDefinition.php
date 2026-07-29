<?php

namespace Sunaoka\Aws\Structures\Glue\RegisterConnectionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'INT'|'SMALLINT'|'BIGINT'|'FLOAT'|'LONG'|'DATE'|'BOOLEAN'|'MAP'|'ARRAY'|'STRING'|'TIMESTAMP'|'DECIMAL'|'BYTE'|'SHORT'|'DOUBLE'|'STRUCT'|'BINARY'|'UNION' $FieldDataType
 * @property string|null $ResponseDateFormat
 * @property bool|null $IsPartitionable
 * @property bool|null $IsNullable
 * @property bool|null $IsQueryable
 * @property bool|null $IsOrderable
 * @property FilterOverrides|null $FilterOverrides
 */
class FieldDefinition extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     FieldDataType: 'INT'|'SMALLINT'|'BIGINT'|'FLOAT'|'LONG'|'DATE'|'BOOLEAN'|'MAP'|'ARRAY'|'STRING'|'TIMESTAMP'|'DECIMAL'|'BYTE'|'SHORT'|'DOUBLE'|'STRUCT'|'BINARY'|'UNION',
     *     ResponseDateFormat?: string|null,
     *     IsPartitionable?: bool|null,
     *     IsNullable?: bool|null,
     *     IsQueryable?: bool|null,
     *     IsOrderable?: bool|null,
     *     FilterOverrides?: FilterOverrides|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
