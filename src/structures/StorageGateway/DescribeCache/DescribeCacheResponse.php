<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeCache;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $GatewayARN
 * @property list<string>|null $DiskIds
 * @property int|null $CacheAllocatedInBytes
 * @property double|null $CacheUsedPercentage
 * @property double|null $CacheDirtyPercentage
 * @property double|null $CacheHitPercentage
 * @property double|null $CacheMissPercentage
 */
class DescribeCacheResponse extends Response
{
}
