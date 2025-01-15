<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteCacheCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CacheClusterId
 * @property string|null $FinalSnapshotIdentifier
 */
class DeleteCacheClusterRequest extends Request
{
    /**
     * @param array{
     *     CacheClusterId: string,
     *     FinalSnapshotIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
