<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeCacheClusters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CacheClusterId
 * @property int|null $MaxRecords
 * @property string|null $Marker
 * @property bool|null $ShowCacheNodeInfo
 * @property bool|null $ShowCacheClustersNotInReplicationGroups
 */
class DescribeCacheClustersRequest extends Request
{
    /**
     * @param array{
     *     CacheClusterId?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null,
     *     ShowCacheNodeInfo?: bool|null,
     *     ShowCacheClustersNotInReplicationGroups?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
