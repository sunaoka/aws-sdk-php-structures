<?php

namespace Sunaoka\Aws\Structures\DynamoDb\TransactGetItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, AttributeValue> $Key
 * @property string $TableName
 * @property string|null $ProjectionExpression
 * @property array<string, string>|null $ExpressionAttributeNames
 */
class Get extends Shape
{
    /**
     * @param array{
     *     Key: array<string, AttributeValue>,
     *     TableName: string,
     *     ProjectionExpression?: string|null,
     *     ExpressionAttributeNames?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
