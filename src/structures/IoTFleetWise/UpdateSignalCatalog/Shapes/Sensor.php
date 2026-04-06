<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\UpdateSignalCatalog\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fullyQualifiedName
 * @property 'INT8'|'UINT8'|'INT16'|'UINT16'|'INT32'|'UINT32'|'INT64'|'UINT64'|'BOOLEAN'|'FLOAT'|'DOUBLE'|'STRING'|'UNIX_TIMESTAMP'|'INT8_ARRAY'|'UINT8_ARRAY'|'INT16_ARRAY'|'UINT16_ARRAY'|'INT32_ARRAY'|'UINT32_ARRAY'|'INT64_ARRAY'|'UINT64_ARRAY'|'BOOLEAN_ARRAY'|'FLOAT_ARRAY'|'DOUBLE_ARRAY'|'STRING_ARRAY'|'UNIX_TIMESTAMP_ARRAY'|'UNKNOWN'|'STRUCT'|'STRUCT_ARRAY' $dataType
 * @property string|null $description
 * @property string|null $unit
 * @property list<string>|null $allowedValues
 * @property double|null $min
 * @property double|null $max
 * @property string|null $deprecationMessage
 * @property string|null $comment
 * @property string|null $structFullyQualifiedName
 */
class Sensor extends Shape
{
    /**
     * @param array{
     *     fullyQualifiedName: string,
     *     dataType: 'INT8'|'UINT8'|'INT16'|'UINT16'|'INT32'|'UINT32'|'INT64'|'UINT64'|'BOOLEAN'|'FLOAT'|'DOUBLE'|'STRING'|'UNIX_TIMESTAMP'|'INT8_ARRAY'|'UINT8_ARRAY'|'INT16_ARRAY'|'UINT16_ARRAY'|'INT32_ARRAY'|'UINT32_ARRAY'|'INT64_ARRAY'|'UINT64_ARRAY'|'BOOLEAN_ARRAY'|'FLOAT_ARRAY'|'DOUBLE_ARRAY'|'STRING_ARRAY'|'UNIX_TIMESTAMP_ARRAY'|'UNKNOWN'|'STRUCT'|'STRUCT_ARRAY',
     *     description?: string|null,
     *     unit?: string|null,
     *     allowedValues?: list<string>|null,
     *     min?: double|null,
     *     max?: double|null,
     *     deprecationMessage?: string|null,
     *     comment?: string|null,
     *     structFullyQualifiedName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
