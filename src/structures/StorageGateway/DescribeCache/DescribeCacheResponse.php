<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeCache;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $GatewayARN
 * @property list<string> $DiskIds
 * @property int $CacheAllocatedInBytes
 * @property double $CacheUsedPercentage
 * @property double $CacheDirtyPercentage
 * @property double $CacheHitPercentage
 * @property double $CacheMissPercentage
 */
class DescribeCacheResponse extends Response
{
}
