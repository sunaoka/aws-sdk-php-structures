<?php

namespace Sunaoka\Aws\Structures\DynamoDb\Scan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableName
 * @property string $IndexName
 * @property list<string> $AttributesToGet
 * @property int<1, max> $Limit
 * @property 'ALL_ATTRIBUTES'|'ALL_PROJECTED_ATTRIBUTES'|'SPECIFIC_ATTRIBUTES'|'COUNT' $Select
 * @property array<string, Shapes\Condition> $ScanFilter
 * @property 'AND'|'OR' $ConditionalOperator
 * @property array<string, Shapes\AttributeValue> $ExclusiveStartKey
 * @property 'INDEXES'|'TOTAL'|'NONE' $ReturnConsumedCapacity
 * @property int<1, 1000000> $TotalSegments
 * @property int<0, 999999> $Segment
 * @property string $ProjectionExpression
 * @property string $FilterExpression
 * @property array<string, string> $ExpressionAttributeNames
 * @property array<string, Shapes\AttributeValue> $ExpressionAttributeValues
 * @property bool $ConsistentRead
 */
class ScanRequest extends Request
{
    /**
     * @param array{
     *     TableName: string,
     *     IndexName?: string,
     *     AttributesToGet?: list<string>,
     *     Limit?: int<1, max>,
     *     Select?: 'ALL_ATTRIBUTES'|'ALL_PROJECTED_ATTRIBUTES'|'SPECIFIC_ATTRIBUTES'|'COUNT',
     *     ScanFilter?: array<string, Shapes\Condition>,
     *     ConditionalOperator?: 'AND'|'OR',
     *     ExclusiveStartKey?: array<string, Shapes\AttributeValue>,
     *     ReturnConsumedCapacity?: 'INDEXES'|'TOTAL'|'NONE',
     *     TotalSegments?: int<1, 1000000>,
     *     Segment?: int<0, 999999>,
     *     ProjectionExpression?: string,
     *     FilterExpression?: string,
     *     ExpressionAttributeNames?: array<string, string>,
     *     ExpressionAttributeValues?: array<string, Shapes\AttributeValue>,
     *     ConsistentRead?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
