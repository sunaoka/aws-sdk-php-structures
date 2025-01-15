<?php

namespace Sunaoka\Aws\Structures\DynamoDb\BatchGetItem;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, list<array<string, Shapes\AttributeValue>>>|null $Responses
 * @property array<string, Shapes\KeysAndAttributes>|null $UnprocessedKeys
 * @property list<Shapes\ConsumedCapacity>|null $ConsumedCapacity
 */
class BatchGetItemResponse extends Response
{
}
