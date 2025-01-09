<?php

namespace Sunaoka\Aws\Structures\ElastiCache\IncreaseReplicaCount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CacheClusterId
 * @property string $CacheNodeId
 * @property Endpoint $ReadEndpoint
 * @property string $PreferredAvailabilityZone
 * @property string $PreferredOutpostArn
 * @property string $CurrentRole
 */
class NodeGroupMember extends Shape
{
    /**
     * @param array{
     *     CacheClusterId?: string,
     *     CacheNodeId?: string,
     *     ReadEndpoint?: Endpoint,
     *     PreferredAvailabilityZone?: string,
     *     PreferredOutpostArn?: string,
     *     CurrentRole?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
