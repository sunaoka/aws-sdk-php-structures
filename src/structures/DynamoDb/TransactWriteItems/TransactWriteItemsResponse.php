<?php

namespace Sunaoka\Aws\Structures\DynamoDb\TransactWriteItems;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ConsumedCapacity> $ConsumedCapacity
 * @property array<string, list<Shapes\ItemCollectionMetrics>> $ItemCollectionMetrics
 */
class TransactWriteItemsResponse extends Response
{
}
