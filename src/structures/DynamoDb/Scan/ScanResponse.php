<?php

namespace Sunaoka\Aws\Structures\DynamoDb\Scan;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<array<string, Shapes\AttributeValue>> $Items
 * @property int $Count
 * @property int $ScannedCount
 * @property array<string, Shapes\AttributeValue> $LastEvaluatedKey
 * @property Shapes\ConsumedCapacity $ConsumedCapacity
 */
class ScanResponse extends Response
{
}
