<?php

namespace Sunaoka\Aws\Structures\DynamoDb\Query;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableName
 * @property string|null $IndexName
 * @property 'ALL_ATTRIBUTES'|'ALL_PROJECTED_ATTRIBUTES'|'SPECIFIC_ATTRIBUTES'|'COUNT'|null $Select
 * @property list<string>|null $AttributesToGet
 * @property int<1, max>|null $Limit
 * @property bool|null $ConsistentRead
 * @property array<string, Shapes\Condition>|null $KeyConditions
 * @property array<string, Shapes\Condition>|null $QueryFilter
 * @property 'AND'|'OR'|null $ConditionalOperator
 * @property bool|null $ScanIndexForward
 * @property array<string, Shapes\AttributeValue>|null $ExclusiveStartKey
 * @property 'INDEXES'|'TOTAL'|'NONE'|null $ReturnConsumedCapacity
 * @property string|null $ProjectionExpression
 * @property string|null $FilterExpression
 * @property string|null $KeyConditionExpression
 * @property array<string, string>|null $ExpressionAttributeNames
 * @property array<string, Shapes\AttributeValue>|null $ExpressionAttributeValues
 */
class QueryRequest extends Request
{
    /**
     * @param array{
     *     TableName: string,
     *     IndexName?: string|null,
     *     Select?: 'ALL_ATTRIBUTES'|'ALL_PROJECTED_ATTRIBUTES'|'SPECIFIC_ATTRIBUTES'|'COUNT'|null,
     *     AttributesToGet?: list<string>|null,
     *     Limit?: int<1, max>|null,
     *     ConsistentRead?: bool|null,
     *     KeyConditions?: array<string, Shapes\Condition>|null,
     *     QueryFilter?: array<string, Shapes\Condition>|null,
     *     ConditionalOperator?: 'AND'|'OR'|null,
     *     ScanIndexForward?: bool|null,
     *     ExclusiveStartKey?: array<string, Shapes\AttributeValue>|null,
     *     ReturnConsumedCapacity?: 'INDEXES'|'TOTAL'|'NONE'|null,
     *     ProjectionExpression?: string|null,
     *     FilterExpression?: string|null,
     *     KeyConditionExpression?: string|null,
     *     ExpressionAttributeNames?: array<string, string>|null,
     *     ExpressionAttributeValues?: array<string, Shapes\AttributeValue>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
