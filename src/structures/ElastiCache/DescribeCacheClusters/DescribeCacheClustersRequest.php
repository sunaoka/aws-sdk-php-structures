<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeCacheClusters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CacheClusterId
 * @property int $MaxRecords
 * @property string $Marker
 * @property bool $ShowCacheNodeInfo
 * @property bool $ShowCacheClustersNotInReplicationGroups
 */
class DescribeCacheClustersRequest extends Request
{
    /**
     * @param array{
     *     CacheClusterId?: string,
     *     MaxRecords?: int,
     *     Marker?: string,
     *     ShowCacheNodeInfo?: bool,
     *     ShowCacheClustersNotInReplicationGroups?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
