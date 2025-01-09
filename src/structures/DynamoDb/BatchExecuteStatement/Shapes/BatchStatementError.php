<?php

namespace Sunaoka\Aws\Structures\DynamoDb\BatchExecuteStatement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ConditionalCheckFailed'|'ItemCollectionSizeLimitExceeded'|'RequestLimitExceeded'|'ValidationError'|'ProvisionedThroughputExceeded'|'TransactionConflict'|'ThrottlingError'|'InternalServerError'|'ResourceNotFound'|'AccessDenied'|'DuplicateItem' $Code
 * @property string $Message
 * @property array<string, AttributeValue> $Item
 */
class BatchStatementError extends Shape
{
    /**
     * @param array{
     *     Code?: 'ConditionalCheckFailed'|'ItemCollectionSizeLimitExceeded'|'RequestLimitExceeded'|'ValidationError'|'ProvisionedThroughputExceeded'|'TransactionConflict'|'ThrottlingError'|'InternalServerError'|'ResourceNotFound'|'AccessDenied'|'DuplicateItem',
     *     Message?: string,
     *     Item?: array<string, AttributeValue>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
