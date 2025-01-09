<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ListAllowedNodeTypeModifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CacheClusterId
 * @property string $ReplicationGroupId
 */
class ListAllowedNodeTypeModificationsRequest extends Request
{
    /**
     * @param array{
     *     CacheClusterId?: string,
     *     ReplicationGroupId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
