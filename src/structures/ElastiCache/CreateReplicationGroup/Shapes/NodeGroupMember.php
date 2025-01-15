<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateReplicationGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CacheClusterId
 * @property string|null $CacheNodeId
 * @property Endpoint|null $ReadEndpoint
 * @property string|null $PreferredAvailabilityZone
 * @property string|null $PreferredOutpostArn
 * @property string|null $CurrentRole
 */
class NodeGroupMember extends Shape
{
    /**
     * @param array{
     *     CacheClusterId?: string|null,
     *     CacheNodeId?: string|null,
     *     ReadEndpoint?: Endpoint|null,
     *     PreferredAvailabilityZone?: string|null,
     *     PreferredOutpostArn?: string|null,
     *     CurrentRole?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
