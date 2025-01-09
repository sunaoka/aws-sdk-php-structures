<?php

namespace Sunaoka\Aws\Structures\DynamoDb\TransactGetItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, AttributeValue> $Key
 * @property string $TableName
 * @property string $ProjectionExpression
 * @property array<string, string> $ExpressionAttributeNames
 */
class Get extends Shape
{
    /**
     * @param array{
     *     Key: array<string, AttributeValue>,
     *     TableName: string,
     *     ProjectionExpression?: string,
     *     ExpressionAttributeNames?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
