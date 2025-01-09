<?php

namespace Sunaoka\Aws\Structures\DynamoDb\BatchExecuteStatement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BatchStatementError $Error
 * @property string $TableName
 * @property array<string, AttributeValue> $Item
 */
class BatchStatementResponse extends Shape
{
    /**
     * @param array{
     *     Error?: BatchStatementError,
     *     TableName?: string,
     *     Item?: array<string, AttributeValue>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
