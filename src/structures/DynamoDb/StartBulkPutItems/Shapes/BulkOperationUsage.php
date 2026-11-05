<?php

namespace Sunaoka\Aws\Structures\DynamoDb\StartBulkPutItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TableName
 * @property int<0, max>|null $BulkPutBytes
 * @property BulkOperationBytes|null $Table
 * @property array<string, BulkOperationBytes>|null $LocalSecondaryIndexes
 * @property array<string, BulkOperationBytes>|null $GlobalSecondaryIndexes
 * @property array<string, BulkOperationVectorBytes>|null $VectorIndexes
 */
class BulkOperationUsage extends Shape
{
    /**
     * @param array{
     *     TableName?: string|null,
     *     BulkPutBytes?: int<0, max>|null,
     *     Table?: BulkOperationBytes|null,
     *     LocalSecondaryIndexes?: array<string, BulkOperationBytes>|null,
     *     GlobalSecondaryIndexes?: array<string, BulkOperationBytes>|null,
     *     VectorIndexes?: array<string, BulkOperationVectorBytes>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
