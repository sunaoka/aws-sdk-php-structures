<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdateComponentType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RELATIONSHIP'|'STRING'|'LONG'|'BOOLEAN'|'INTEGER'|'DOUBLE'|'LIST'|'MAP' $type
 * @property DataType $nestedType
 * @property list<DataValue> $allowedValues
 * @property string $unitOfMeasure
 * @property Relationship $relationship
 */
class DataType extends Shape
{
    /**
     * @param array{
     *     type: 'RELATIONSHIP'|'STRING'|'LONG'|'BOOLEAN'|'INTEGER'|'DOUBLE'|'LIST'|'MAP',
     *     nestedType?: DataType,
     *     allowedValues?: list<DataValue>,
     *     unitOfMeasure?: string,
     *     relationship?: Relationship
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
