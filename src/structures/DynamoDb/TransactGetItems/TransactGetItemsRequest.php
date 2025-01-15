<?php

namespace Sunaoka\Aws\Structures\DynamoDb\TransactGetItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\TransactGetItem> $TransactItems
 * @property 'INDEXES'|'TOTAL'|'NONE'|null $ReturnConsumedCapacity
 */
class TransactGetItemsRequest extends Request
{
    /**
     * @param array{
     *     TransactItems: list<Shapes\TransactGetItem>,
     *     ReturnConsumedCapacity?: 'INDEXES'|'TOTAL'|'NONE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
