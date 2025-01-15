<?php

namespace Sunaoka\Aws\Structures\DynamoDb\Scan;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<array<string, Shapes\AttributeValue>>|null $Items
 * @property int|null $Count
 * @property int|null $ScannedCount
 * @property array<string, Shapes\AttributeValue>|null $LastEvaluatedKey
 * @property Shapes\ConsumedCapacity|null $ConsumedCapacity
 */
class ScanResponse extends Response
{
}
