<?php

namespace Sunaoka\Aws\Structures\DynamoDb\BatchWriteItem;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, list<Shapes\WriteRequest>>|null $UnprocessedItems
 * @property array<string, list<Shapes\ItemCollectionMetrics>>|null $ItemCollectionMetrics
 * @property list<Shapes\ConsumedCapacity>|null $ConsumedCapacity
 */
class BatchWriteItemResponse extends Response
{
}
