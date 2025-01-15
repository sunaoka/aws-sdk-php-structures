<?php

namespace Sunaoka\Aws\Structures\DynamoDb\PutItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableName
 * @property array<string, Shapes\AttributeValue> $Item
 * @property array<string, Shapes\ExpectedAttributeValue>|null $Expected
 * @property 'NONE'|'ALL_OLD'|'UPDATED_OLD'|'ALL_NEW'|'UPDATED_NEW'|null $ReturnValues
 * @property 'INDEXES'|'TOTAL'|'NONE'|null $ReturnConsumedCapacity
 * @property 'SIZE'|'NONE'|null $ReturnItemCollectionMetrics
 * @property 'AND'|'OR'|null $ConditionalOperator
 * @property string|null $ConditionExpression
 * @property array<string, string>|null $ExpressionAttributeNames
 * @property array<string, Shapes\AttributeValue>|null $ExpressionAttributeValues
 * @property 'ALL_OLD'|'NONE'|null $ReturnValuesOnConditionCheckFailure
 */
class PutItemRequest extends Request
{
    /**
     * @param array{
     *     TableName: string,
     *     Item: array<string, Shapes\AttributeValue>,
     *     Expected?: array<string, Shapes\ExpectedAttributeValue>|null,
     *     ReturnValues?: 'NONE'|'ALL_OLD'|'UPDATED_OLD'|'ALL_NEW'|'UPDATED_NEW'|null,
     *     ReturnConsumedCapacity?: 'INDEXES'|'TOTAL'|'NONE'|null,
     *     ReturnItemCollectionMetrics?: 'SIZE'|'NONE'|null,
     *     ConditionalOperator?: 'AND'|'OR'|null,
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
