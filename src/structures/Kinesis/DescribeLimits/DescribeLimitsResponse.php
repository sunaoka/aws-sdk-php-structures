<?php

namespace Sunaoka\Aws\Structures\Kinesis\DescribeLimits;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int<0, 1000000> $ShardLimit
 * @property int<0, 1000000> $OpenShardCount
 * @property int<0, 1000000> $OnDemandStreamCount
 * @property int<0, 1000000> $OnDemandStreamCountLimit
 * @property int<0, 1000000>|null $ChannelCount
 * @property int<0, 1000000>|null $ChannelCountLimit
 */
class DescribeLimitsResponse extends Response
{
}
