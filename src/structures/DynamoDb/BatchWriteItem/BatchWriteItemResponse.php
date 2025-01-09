<?php

namespace Sunaoka\Aws\Structures\DynamoDb\BatchWriteItem;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, list<Shapes\WriteRequest>> $UnprocessedItems
 * @property array<string, list<Shapes\ItemCollectionMetrics>> $ItemCollectionMetrics
 * @property list<Shapes\ConsumedCapacity> $ConsumedCapacity
 */
class BatchWriteItemResponse extends Response
{
}
