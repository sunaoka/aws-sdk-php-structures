<?php

namespace Sunaoka\Aws\Structures\DynamoDb\TransactWriteItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, AttributeValue> $Key
 * @property string $UpdateExpression
 * @property string $TableName
 * @property string $ConditionExpression
 * @property array<string, string> $ExpressionAttributeNames
 * @property array<string, AttributeValue> $ExpressionAttributeValues
 * @property 'ALL_OLD'|'NONE' $ReturnValuesOnConditionCheckFailure
 */
class Update extends Shape
{
    /**
     * @param array{
     *     Key: array<string, AttributeValue>,
     *     UpdateExpression: string,
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
