<?php

namespace Sunaoka\Aws\Structures\DynamoDb\BatchGetItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, Shapes\KeysAndAttributes> $RequestItems
 * @property 'INDEXES'|'TOTAL'|'NONE' $ReturnConsumedCapacity
 */
class BatchGetItemRequest extends Request
{
    /**
     * @param array{
     *     RequestItems: array<string, Shapes\KeysAndAttributes>,
     *     ReturnConsumedCapacity?: 'INDEXES'|'TOTAL'|'NONE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
