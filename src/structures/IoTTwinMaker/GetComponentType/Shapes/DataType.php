<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetComponentType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RELATIONSHIP'|'STRING'|'LONG'|'BOOLEAN'|'INTEGER'|'DOUBLE'|'LIST'|'MAP' $type
 * @property DataType|null $nestedType
 * @property list<DataValue>|null $allowedValues
 * @property string|null $unitOfMeasure
 * @property Relationship|null $relationship
 */
class DataType extends Shape
{
    /**
     * @param array{
     *     type: 'RELATIONSHIP'|'STRING'|'LONG'|'BOOLEAN'|'INTEGER'|'DOUBLE'|'LIST'|'MAP',
     *     nestedType?: DataType|null,
     *     allowedValues?: list<DataValue>|null,
     *     unitOfMeasure?: string|null,
     *     relationship?: Relationship|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
