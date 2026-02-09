<?php

namespace Sunaoka\Aws\Structures\Glue\DescribeConnectionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'INT'|'SMALLINT'|'BIGINT'|'FLOAT'|'LONG'|'DATE'|'BOOLEAN'|'MAP'|'ARRAY'|'STRING'|'TIMESTAMP'|'DECIMAL'|'BYTE'|'SHORT'|'DOUBLE'|'STRUCT'|'BINARY'|'UNION' $FieldDataType
 */
class FieldDefinition extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     FieldDataType: 'INT'|'SMALLINT'|'BIGINT'|'FLOAT'|'LONG'|'DATE'|'BOOLEAN'|'MAP'|'ARRAY'|'STRING'|'TIMESTAMP'|'DECIMAL'|'BYTE'|'SHORT'|'DOUBLE'|'STRUCT'|'BINARY'|'UNION'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
