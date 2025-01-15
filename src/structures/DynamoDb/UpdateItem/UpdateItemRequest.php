<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableName
 * @property array<string, Shapes\AttributeValue> $Key
 * @property array<string, Shapes\AttributeValueUpdate>|null $AttributeUpdates
 * @property array<string, Shapes\ExpectedAttributeValue>|null $Expected
 * @property 'AND'|'OR'|null $ConditionalOperator
 * @property 'NONE'|'ALL_OLD'|'UPDATED_OLD'|'ALL_NEW'|'UPDATED_NEW'|null $ReturnValues
 * @property 'INDEXES'|'TOTAL'|'NONE'|null $ReturnConsumedCapacity
 * @property 'SIZE'|'NONE'|null $ReturnItemCollectionMetrics
 * @property string|null $UpdateExpression
 * @property string|null $ConditionExpression
 * @property array<string, string>|null $ExpressionAttributeNames
 * @property array<string, Shapes\AttributeValue>|null $ExpressionAttributeValues
 * @property 'ALL_OLD'|'NONE'|null $ReturnValuesOnConditionCheckFailure
 */
class UpdateItemRequest extends Request
{
    /**
     * @param array{
     *     TableName: string,
     *     Key: array<string, Shapes\AttributeValue>,
     *     AttributeUpdates?: array<string, Shapes\AttributeValueUpdate>|null,
     *     Expected?: array<string, Shapes\ExpectedAttributeValue>|null,
     *     ConditionalOperator?: 'AND'|'OR'|null,
     *     ReturnValues?: 'NONE'|'ALL_OLD'|'UPDATED_OLD'|'ALL_NEW'|'UPDATED_NEW'|null,
     *     ReturnConsumedCapacity?: 'INDEXES'|'TOTAL'|'NONE'|null,
     *     ReturnItemCollectionMetrics?: 'SIZE'|'NONE'|null,
     *     UpdateExpression?: string|null,
     *     ConditionExpression?: string|null,
     *     ExpressionAttributeNames?: array<string, string>|null,
     *     ExpressionAttributeValues?: array<string, Shapes\AttributeValue>|null,
     *     ReturnValuesOnConditionCheckFailure?: 'ALL_OLD'|'NONE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
