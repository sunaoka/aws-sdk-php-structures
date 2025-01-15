<?php

namespace Sunaoka\Aws\Structures\DynamoDb\Scan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableName
 * @property string|null $IndexName
 * @property list<string>|null $AttributesToGet
 * @property int<1, max>|null $Limit
 * @property 'ALL_ATTRIBUTES'|'ALL_PROJECTED_ATTRIBUTES'|'SPECIFIC_ATTRIBUTES'|'COUNT'|null $Select
 * @property array<string, Shapes\Condition>|null $ScanFilter
 * @property 'AND'|'OR'|null $ConditionalOperator
 * @property array<string, Shapes\AttributeValue>|null $ExclusiveStartKey
 * @property 'INDEXES'|'TOTAL'|'NONE'|null $ReturnConsumedCapacity
 * @property int<1, 1000000>|null $TotalSegments
 * @property int<0, 999999>|null $Segment
 * @property string|null $ProjectionExpression
 * @property string|null $FilterExpression
 * @property array<string, string>|null $ExpressionAttributeNames
 * @property array<string, Shapes\AttributeValue>|null $ExpressionAttributeValues
 * @property bool|null $ConsistentRead
 */
class ScanRequest extends Request
{
    /**
     * @param array{
     *     TableName: string,
     *     IndexName?: string|null,
     *     AttributesToGet?: list<string>|null,
     *     Limit?: int<1, max>|null,
     *     Select?: 'ALL_ATTRIBUTES'|'ALL_PROJECTED_ATTRIBUTES'|'SPECIFIC_ATTRIBUTES'|'COUNT'|null,
     *     ScanFilter?: array<string, Shapes\Condition>|null,
     *     ConditionalOperator?: 'AND'|'OR'|null,
     *     ExclusiveStartKey?: array<string, Shapes\AttributeValue>|null,
     *     ReturnConsumedCapacity?: 'INDEXES'|'TOTAL'|'NONE'|null,
     *     TotalSegments?: int<1, 1000000>|null,
     *     Segment?: int<0, 999999>|null,
     *     ProjectionExpression?: string|null,
     *     FilterExpression?: string|null,
     *     ExpressionAttributeNames?: array<string, string>|null,
     *     ExpressionAttributeValues?: array<string, Shapes\AttributeValue>|null,
     *     ConsistentRead?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
