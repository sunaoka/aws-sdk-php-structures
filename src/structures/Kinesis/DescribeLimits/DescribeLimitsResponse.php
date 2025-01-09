<?php

namespace Sunaoka\Aws\Structures\Kinesis\DescribeLimits;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $ShardLimit
 * @property int $OpenShardCount
 * @property int $OnDemandStreamCount
 * @property int $OnDemandStreamCountLimit
 */
class DescribeLimitsResponse extends Response
{
}
