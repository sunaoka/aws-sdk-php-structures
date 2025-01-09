<?php

namespace Sunaoka\Aws\Structures\ElastiCache\RebootCacheCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CacheClusterId
 * @property list<string> $CacheNodeIdsToReboot
 */
class RebootCacheClusterRequest extends Request
{
    /**
     * @param array{
     *     CacheClusterId: string,
     *     CacheNodeIdsToReboot: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
