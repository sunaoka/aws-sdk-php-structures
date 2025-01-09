<?php

namespace Sunaoka\Aws\Structures\DynamoDb\BatchGetItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<array<string, AttributeValue>> $Keys
 * @property list<string> $AttributesToGet
 * @property bool $ConsistentRead
 * @property string $ProjectionExpression
 * @property array<string, string> $ExpressionAttributeNames
 */
class KeysAndAttributes extends Shape
{
    /**
     * @param array{
     *     Keys: list<array<string, AttributeValue>>,
     *     AttributesToGet?: list<string>,
     *     ConsistentRead?: bool,
     *     ProjectionExpression?: string,
     *     ExpressionAttributeNames?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
