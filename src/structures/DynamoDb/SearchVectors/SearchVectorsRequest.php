<?php

namespace Sunaoka\Aws\Structures\DynamoDb\SearchVectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableName
 * @property string $IndexName
 * @property 'INDEXES'|'TOTAL'|'NONE'|null $ReturnConsumedCapacity
 * @property array<string, string>|null $ExpressionAttributeNames
 * @property array<string, Shapes\AttributeValue>|null $ExpressionAttributeValues
 * @property string|null $ProjectionExpression
 * @property list<Shapes\AttributeValue> $SearchVector
 * @property string|null $SearchConditionExpression
 * @property int<1, max> $TopK
 */
class SearchVectorsRequest extends Request
{
    /**
     * @param array{
     *     TableName: string,
     *     IndexName: string,
     *     ReturnConsumedCapacity?: 'INDEXES'|'TOTAL'|'NONE'|null,
     *     ExpressionAttributeNames?: array<string, string>|null,
     *     ExpressionAttributeValues?: array<string, Shapes\AttributeValue>|null,
     *     ProjectionExpression?: string|null,
     *     SearchVector: list<Shapes\AttributeValue>,
     *     SearchConditionExpression?: string|null,
     *     TopK: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
