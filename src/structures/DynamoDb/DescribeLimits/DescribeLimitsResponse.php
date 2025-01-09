<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeLimits;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $AccountMaxReadCapacityUnits
 * @property int $AccountMaxWriteCapacityUnits
 * @property int $TableMaxReadCapacityUnits
 * @property int $TableMaxWriteCapacityUnits
 */
class DescribeLimitsResponse extends Response
{
}
