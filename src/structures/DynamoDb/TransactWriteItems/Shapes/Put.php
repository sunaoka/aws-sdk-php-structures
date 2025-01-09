<?php

namespace Sunaoka\Aws\Structures\DynamoDb\TransactWriteItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, AttributeValue> $Item
 * @property string $TableName
 * @property string $ConditionExpression
 * @property array<string, string> $ExpressionAttributeNames
 * @property array<string, AttributeValue> $ExpressionAttributeValues
 * @property 'ALL_OLD'|'NONE' $ReturnValuesOnConditionCheckFailure
 */
class Put extends Shape
{
    /**
     * @param array{
     *     Item: array<string, AttributeValue>,
     *     TableName: string,
     *     ConditionExpression?: string,
     *     ExpressionAttributeNames?: array<string, string>,
     *     ExpressionAttributeValues?: array<string, AttributeValue>,
     *     ReturnValuesOnConditionCheckFailure?: 'ALL_OLD'|'NONE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
