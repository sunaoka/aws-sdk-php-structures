<?php

namespace Sunaoka\Aws\Structures\DynamoDb\TransactWriteItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\TransactWriteItem> $TransactItems
 * @property 'INDEXES'|'TOTAL'|'NONE'|null $ReturnConsumedCapacity
 * @property 'SIZE'|'NONE'|null $ReturnItemCollectionMetrics
 * @property string|null $ClientRequestToken
 */
class TransactWriteItemsRequest extends Request
{
    /**
     * @param array{
     *     TransactItems: list<Shapes\TransactWriteItem>,
     *     ReturnConsumedCapacity?: 'INDEXES'|'TOTAL'|'NONE'|null,
     *     ReturnItemCollectionMetrics?: 'SIZE'|'NONE'|null,
     *     ClientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
