<?php

namespace Sunaoka\Aws\Structures\DynamoDb\GetItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableName
 * @property array<string, Shapes\AttributeValue> $Key
 * @property list<string>|null $AttributesToGet
 * @property bool|null $ConsistentRead
 * @property 'INDEXES'|'TOTAL'|'NONE'|null $ReturnConsumedCapacity
 * @property string|null $ProjectionExpression
 * @property array<string, string>|null $ExpressionAttributeNames
 */
class GetItemRequest extends Request
{
    /**
     * @param array{
     *     TableName: string,
     *     Key: array<string, Shapes\AttributeValue>,
     *     AttributesToGet?: list<string>|null,
     *     ConsistentRead?: bool|null,
     *     ReturnConsumedCapacity?: 'INDEXES'|'TOTAL'|'NONE'|null,
     *     ProjectionExpression?: string|null,
     *     ExpressionAttributeNames?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
