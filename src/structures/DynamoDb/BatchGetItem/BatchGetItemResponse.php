<?php

namespace Sunaoka\Aws\Structures\DynamoDb\BatchGetItem;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, list<array<string, Shapes\AttributeValue>>> $Responses
 * @property array<string, Shapes\KeysAndAttributes> $UnprocessedKeys
 * @property list<Shapes\ConsumedCapacity> $ConsumedCapacity
 */
class BatchGetItemResponse extends Response
{
}
