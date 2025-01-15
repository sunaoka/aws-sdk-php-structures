<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DeleteItem;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, Shapes\AttributeValue>|null $Attributes
 * @property Shapes\ConsumedCapacity|null $ConsumedCapacity
 * @property Shapes\ItemCollectionMetrics|null $ItemCollectionMetrics
 */
class DeleteItemResponse extends Response
{
}
