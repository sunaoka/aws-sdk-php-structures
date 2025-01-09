<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeLimits;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int<1, max> $AccountMaxReadCapacityUnits
 * @property int<1, max> $AccountMaxWriteCapacityUnits
 * @property int<1, max> $TableMaxReadCapacityUnits
 * @property int<1, max> $TableMaxWriteCapacityUnits
 */
class DescribeLimitsResponse extends Response
{
}
