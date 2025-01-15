<?php

namespace Sunaoka\Aws\Structures\DynamoDb\TransactWriteItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, AttributeValue> $Key
 * @property string $TableName
 * @property string|null $ConditionExpression
 * @property array<string, string>|null $ExpressionAttributeNames
 * @property array<string, AttributeValue>|null $ExpressionAttributeValues
 * @property 'ALL_OLD'|'NONE'|null $ReturnValuesOnConditionCheckFailure
 */
class Delete extends Shape
{
    /**
     * @param array{
     *     Key: array<string, AttributeValue>,
     *     TableName: string,
     *     ConditionExpression?: string|null,
     *     ExpressionAttributeNames?: array<string, string>|null,
     *     ExpressionAttributeValues?: array<string, AttributeValue>|null,
     *     ReturnValuesOnConditionCheckFailure?: 'ALL_OLD'|'NONE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
