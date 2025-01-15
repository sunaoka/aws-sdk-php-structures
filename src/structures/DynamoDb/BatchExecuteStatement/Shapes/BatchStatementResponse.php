<?php

namespace Sunaoka\Aws\Structures\DynamoDb\BatchExecuteStatement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BatchStatementError|null $Error
 * @property string|null $TableName
 * @property array<string, AttributeValue>|null $Item
 */
class BatchStatementResponse extends Shape
{
    /**
     * @param array{
     *     Error?: BatchStatementError|null,
     *     TableName?: string|null,
     *     Item?: array<string, AttributeValue>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
