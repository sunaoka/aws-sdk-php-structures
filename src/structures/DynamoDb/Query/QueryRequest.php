<?php

namespace Sunaoka\Aws\Structures\DynamoDb\Query;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableName
 * @property string $IndexName
 * @property 'ALL_ATTRIBUTES'|'ALL_PROJECTED_ATTRIBUTES'|'SPECIFIC_ATTRIBUTES'|'COUNT' $Select
 * @property list<string> $AttributesToGet
 * @property int<1, max> $Limit
 * @property bool $ConsistentRead
 * @property array<string, Shapes\Condition> $KeyConditions
 * @property array<string, Shapes\Condition> $QueryFilter
 * @property 'AND'|'OR' $ConditionalOperator
 * @property bool $ScanIndexForward
 * @property array<string, Shapes\AttributeValue> $ExclusiveStartKey
 * @property 'INDEXES'|'TOTAL'|'NONE' $ReturnConsumedCapacity
 * @property string $ProjectionExpression
 * @property string $FilterExpression
 * @property string $KeyConditionExpression
 * @property array<string, string> $ExpressionAttributeNames
 * @property array<string, Shapes\AttributeValue> $ExpressionAttributeValues
 */
class QueryRequest extends Request
{
    /**
     * @param array{
     *     TableName: string,
     *     IndexName?: string,
     *     Select?: 'ALL_ATTRIBUTES'|'ALL_PROJECTED_ATTRIBUTES'|'SPECIFIC_ATTRIBUTES'|'COUNT',
     *     AttributesToGet?: list<string>,
     *     Limit?: int<1, max>,
     *     ConsistentRead?: bool,
     *     KeyConditions?: array<string, Shapes\Condition>,
     *     QueryFilter?: array<string, Shapes\Condition>,
     *     ConditionalOperator?: 'AND'|'OR',
     *     ScanIndexForward?: bool,
     *     ExclusiveStartKey?: array<string, Shapes\AttributeValue>,
     *     ReturnConsumedCapacity?: 'INDEXES'|'TOTAL'|'NONE',
     *     ProjectionExpression?: string,
     *     FilterExpression?: string,
     *     KeyConditionExpression?: string,
     *     ExpressionAttributeNames?: array<string, string>,
     *     ExpressionAttributeValues?: array<string, Shapes\AttributeValue>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
