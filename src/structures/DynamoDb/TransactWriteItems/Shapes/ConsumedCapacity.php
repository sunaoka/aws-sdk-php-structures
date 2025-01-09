<?php

namespace Sunaoka\Aws\Structures\DynamoDb\TransactWriteItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TableName
 * @property double $CapacityUnits
 * @property double $ReadCapacityUnits
 * @property double $WriteCapacityUnits
 * @property Capacity $Table
 * @property array<string, Capacity> $LocalSecondaryIndexes
 * @property array<string, Capacity> $GlobalSecondaryIndexes
 */
class ConsumedCapacity extends Shape
{
    /**
     * @param array{
     *     TableName?: string,
     *     CapacityUnits?: double,
     *     ReadCapacityUnits?: double,
     *     WriteCapacityUnits?: double,
     *     Table?: Capacity,
     *     LocalSecondaryIndexes?: array<string, Capacity>,
     *     GlobalSecondaryIndexes?: array<string, Capacity>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
