<?php

namespace Sunaoka\Aws\Structures\DynamoDb\TransactWriteItems;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ConsumedCapacity>|null $ConsumedCapacity
 * @property array<string, list<Shapes\ItemCollectionMetrics>>|null $ItemCollectionMetrics
 */
class TransactWriteItemsResponse extends Response
{
}
