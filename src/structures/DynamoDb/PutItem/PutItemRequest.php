<?php

namespace Sunaoka\Aws\Structures\DynamoDb\PutItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableName
 * @property array<string, Shapes\AttributeValue> $Item
 * @property array<string, Shapes\ExpectedAttributeValue> $Expected
 * @property 'NONE'|'ALL_OLD'|'UPDATED_OLD'|'ALL_NEW'|'UPDATED_NEW' $ReturnValues
 * @property 'INDEXES'|'TOTAL'|'NONE' $ReturnConsumedCapacity
 * @property 'SIZE'|'NONE' $ReturnItemCollectionMetrics
 * @property 'AND'|'OR' $ConditionalOperator
 * @property string $ConditionExpression
 * @property array<string, string> $ExpressionAttributeNames
 * @property array<string, Shapes\AttributeValue> $ExpressionAttributeValues
 * @property 'ALL_OLD'|'NONE' $ReturnValuesOnConditionCheckFailure
 */
class PutItemRequest extends Request
{
    /**
     * @param array{
     *     TableName: string,
     *     Item: array<string, Shapes\AttributeValue>,
     *     Expected?: array<string, Shapes\ExpectedAttributeValue>,
     *     ReturnValues?: 'NONE'|'ALL_OLD'|'UPDATED_OLD'|'ALL_NEW'|'UPDATED_NEW',
     *     ReturnConsumedCapacity?: 'INDEXES'|'TOTAL'|'NONE',
     *     ReturnItemCollectionMetrics?: 'SIZE'|'NONE',
     *     ConditionalOperator?: 'AND'|'OR',
     *     ConditionExpression?: string,
     *     ExpressionAttributeNames?: array<string, string>,
     *     ExpressionAttributeValues?: array<string, Shapes\AttributeValue>,
     *     ReturnValuesOnConditionCheckFailure?: 'ALL_OLD'|'NONE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
