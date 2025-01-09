<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteCacheCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CacheClusterId
 * @property string $FinalSnapshotIdentifier
 */
class DeleteCacheClusterRequest extends Request
{
    /**
     * @param array{
     *     CacheClusterId: string,
     *     FinalSnapshotIdentifier?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
