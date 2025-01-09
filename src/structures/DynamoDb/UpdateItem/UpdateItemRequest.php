<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableName
 * @property array<string, Shapes\AttributeValue> $Key
 * @property array<string, Shapes\AttributeValueUpdate> $AttributeUpdates
 * @property array<string, Shapes\ExpectedAttributeValue> $Expected
 * @property 'AND'|'OR' $ConditionalOperator
 * @property 'NONE'|'ALL_OLD'|'UPDATED_OLD'|'ALL_NEW'|'UPDATED_NEW' $ReturnValues
 * @property 'INDEXES'|'TOTAL'|'NONE' $ReturnConsumedCapacity
 * @property 'SIZE'|'NONE' $ReturnItemCollectionMetrics
 * @property string $UpdateExpression
 * @property string $ConditionExpression
 * @property array<string, string> $ExpressionAttributeNames
 * @property array<string, Shapes\AttributeValue> $ExpressionAttributeValues
 * @property 'ALL_OLD'|'NONE' $ReturnValuesOnConditionCheckFailure
 */
class UpdateItemRequest extends Request
{
    /**
     * @param array{
     *     TableName: string,
     *     Key: array<string, Shapes\AttributeValue>,
     *     AttributeUpdates?: array<string, Shapes\AttributeValueUpdate>,
     *     Expected?: array<string, Shapes\ExpectedAttributeValue>,
     *     ConditionalOperator?: 'AND'|'OR',
     *     ReturnValues?: 'NONE'|'ALL_OLD'|'UPDATED_OLD'|'ALL_NEW'|'UPDATED_NEW',
     *     ReturnConsumedCapacity?: 'INDEXES'|'TOTAL'|'NONE',
     *     ReturnItemCollectionMetrics?: 'SIZE'|'NONE',
     *     UpdateExpression?: string,
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
