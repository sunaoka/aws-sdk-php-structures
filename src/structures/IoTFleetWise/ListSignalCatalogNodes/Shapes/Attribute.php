<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListSignalCatalogNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fullyQualifiedName
 * @property 'INT8'|'UINT8'|'INT16'|'UINT16'|'INT32'|'UINT32'|'INT64'|'UINT64'|'BOOLEAN'|'FLOAT'|'DOUBLE'|'STRING'|'UNIX_TIMESTAMP'|'INT8_ARRAY'|'UINT8_ARRAY'|'INT16_ARRAY'|'UINT16_ARRAY'|'INT32_ARRAY'|'UINT32_ARRAY'|'INT64_ARRAY'|'UINT64_ARRAY'|'BOOLEAN_ARRAY'|'FLOAT_ARRAY'|'DOUBLE_ARRAY'|'STRING_ARRAY'|'UNIX_TIMESTAMP_ARRAY'|'UNKNOWN'|'STRUCT'|'STRUCT_ARRAY' $dataType
 * @property string $description
 * @property string $unit
 * @property list<string> $allowedValues
 * @property double $min
 * @property double $max
 * @property string $assignedValue
 * @property string $defaultValue
 * @property string $deprecationMessage
 * @property string $comment
 */
class Attribute extends Shape
{
    /**
     * @param array{
     *     fullyQualifiedName: string,
     *     dataType: 'INT8'|'UINT8'|'INT16'|'UINT16'|'INT32'|'UINT32'|'INT64'|'UINT64'|'BOOLEAN'|'FLOAT'|'DOUBLE'|'STRING'|'UNIX_TIMESTAMP'|'INT8_ARRAY'|'UINT8_ARRAY'|'INT16_ARRAY'|'UINT16_ARRAY'|'INT32_ARRAY'|'UINT32_ARRAY'|'INT64_ARRAY'|'UINT64_ARRAY'|'BOOLEAN_ARRAY'|'FLOAT_ARRAY'|'DOUBLE_ARRAY'|'STRING_ARRAY'|'UNIX_TIMESTAMP_ARRAY'|'UNKNOWN'|'STRUCT'|'STRUCT_ARRAY',
     *     description?: string,
     *     unit?: string,
     *     allowedValues?: list<string>,
     *     min?: double,
     *     max?: double,
     *     assignedValue?: string,
     *     defaultValue?: string,
     *     deprecationMessage?: string,
     *     comment?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
