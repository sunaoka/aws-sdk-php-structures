<?php

namespace Sunaoka\Aws\Structures\DynamoDb\BatchWriteItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, list<Shapes\WriteRequest>> $RequestItems
 * @property 'INDEXES'|'TOTAL'|'NONE' $ReturnConsumedCapacity
 * @property 'SIZE'|'NONE' $ReturnItemCollectionMetrics
 */
class BatchWriteItemRequest extends Request
{
    /**
     * @param array{
     *     RequestItems: array<string, list<Shapes\WriteRequest>>,
     *     ReturnConsumedCapacity?: 'INDEXES'|'TOTAL'|'NONE',
     *     ReturnItemCollectionMetrics?: 'SIZE'|'NONE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
