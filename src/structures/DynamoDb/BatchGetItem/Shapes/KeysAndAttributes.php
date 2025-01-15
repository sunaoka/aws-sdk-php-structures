<?php

namespace Sunaoka\Aws\Structures\DynamoDb\BatchGetItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<array<string, AttributeValue>> $Keys
 * @property list<string>|null $AttributesToGet
 * @property bool|null $ConsistentRead
 * @property string|null $ProjectionExpression
 * @property array<string, string>|null $ExpressionAttributeNames
 */
class KeysAndAttributes extends Shape
{
    /**
     * @param array{
     *     Keys: list<array<string, AttributeValue>>,
     *     AttributesToGet?: list<string>|null,
     *     ConsistentRead?: bool|null,
     *     ProjectionExpression?: string|null,
     *     ExpressionAttributeNames?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
