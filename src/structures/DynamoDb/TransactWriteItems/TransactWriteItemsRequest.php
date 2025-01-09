<?php

namespace Sunaoka\Aws\Structures\DynamoDb\TransactWriteItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\TransactWriteItem> $TransactItems
 * @property 'INDEXES'|'TOTAL'|'NONE' $ReturnConsumedCapacity
 * @property 'SIZE'|'NONE' $ReturnItemCollectionMetrics
 * @property string $ClientRequestToken
 */
class TransactWriteItemsRequest extends Request
{
    /**
     * @param array{
     *     TransactItems: list<Shapes\TransactWriteItem>,
     *     ReturnConsumedCapacity?: 'INDEXES'|'TOTAL'|'NONE',
     *     ReturnItemCollectionMetrics?: 'SIZE'|'NONE',
     *     ClientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
