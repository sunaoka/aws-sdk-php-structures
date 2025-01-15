<?php

namespace Sunaoka\Aws\Structures\DynamoDb\BatchExecuteStatement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ConditionalCheckFailed'|'ItemCollectionSizeLimitExceeded'|'RequestLimitExceeded'|'ValidationError'|'ProvisionedThroughputExceeded'|'TransactionConflict'|'ThrottlingError'|'InternalServerError'|'ResourceNotFound'|'AccessDenied'|'DuplicateItem'|null $Code
 * @property string|null $Message
 * @property array<string, AttributeValue>|null $Item
 */
class BatchStatementError extends Shape
{
    /**
     * @param array{
     *     Code?: 'ConditionalCheckFailed'|'ItemCollectionSizeLimitExceeded'|'RequestLimitExceeded'|'ValidationError'|'ProvisionedThroughputExceeded'|'TransactionConflict'|'ThrottlingError'|'InternalServerError'|'ResourceNotFound'|'AccessDenied'|'DuplicateItem'|null,
     *     Message?: string|null,
     *     Item?: array<string, AttributeValue>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
