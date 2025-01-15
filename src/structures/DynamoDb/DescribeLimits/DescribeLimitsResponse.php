<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeLimits;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int<1, max>|null $AccountMaxReadCapacityUnits
 * @property int<1, max>|null $AccountMaxWriteCapacityUnits
 * @property int<1, max>|null $TableMaxReadCapacityUnits
 * @property int<1, max>|null $TableMaxWriteCapacityUnits
 */
class DescribeLimitsResponse extends Response
{
}
