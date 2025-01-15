<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ListAllowedNodeTypeModifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CacheClusterId
 * @property string|null $ReplicationGroupId
 */
class ListAllowedNodeTypeModificationsRequest extends Request
{
    /**
     * @param array{
     *     CacheClusterId?: string|null,
     *     ReplicationGroupId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
