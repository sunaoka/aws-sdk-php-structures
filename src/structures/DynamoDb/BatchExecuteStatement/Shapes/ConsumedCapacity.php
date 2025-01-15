<?php

namespace Sunaoka\Aws\Structures\DynamoDb\BatchExecuteStatement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TableName
 * @property double|null $CapacityUnits
 * @property double|null $ReadCapacityUnits
 * @property double|null $WriteCapacityUnits
 * @property Capacity|null $Table
 * @property array<string, Capacity>|null $LocalSecondaryIndexes
 * @property array<string, Capacity>|null $GlobalSecondaryIndexes
 */
class ConsumedCapacity extends Shape
{
    /**
     * @param array{
     *     TableName?: string|null,
     *     CapacityUnits?: double|null,
     *     ReadCapacityUnits?: double|null,
     *     WriteCapacityUnits?: double|null,
     *     Table?: Capacity|null,
     *     LocalSecondaryIndexes?: array<string, Capacity>|null,
     *     GlobalSecondaryIndexes?: array<string, Capacity>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
