<?php

namespace Sunaoka\Aws\Structures\DynamoDb\GetItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableName
 * @property array<string, Shapes\AttributeValue> $Key
 * @property list<string> $AttributesToGet
 * @property bool $ConsistentRead
 * @property 'INDEXES'|'TOTAL'|'NONE' $ReturnConsumedCapacity
 * @property string $ProjectionExpression
 * @property array<string, string> $ExpressionAttributeNames
 */
class GetItemRequest extends Request
{
    /**
     * @param array{
     *     TableName: string,
     *     Key: array<string, Shapes\AttributeValue>,
     *     AttributesToGet?: list<string>,
     *     ConsistentRead?: bool,
     *     ReturnConsumedCapacity?: 'INDEXES'|'TOTAL'|'NONE',
     *     ProjectionExpression?: string,
     *     ExpressionAttributeNames?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
