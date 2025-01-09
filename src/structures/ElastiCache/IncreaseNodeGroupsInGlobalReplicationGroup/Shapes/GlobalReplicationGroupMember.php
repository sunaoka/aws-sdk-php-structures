<?php

namespace Sunaoka\Aws\Structures\ElastiCache\IncreaseNodeGroupsInGlobalReplicationGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReplicationGroupId
 * @property string $ReplicationGroupRegion
 * @property string $Role
 * @property 'enabled'|'disabled'|'enabling'|'disabling' $AutomaticFailover
 * @property string $Status
 */
class GlobalReplicationGroupMember extends Shape
{
    /**
     * @param array{
     *     ReplicationGroupId?: string,
     *     ReplicationGroupRegion?: string,
     *     Role?: string,
     *     AutomaticFailover?: 'enabled'|'disabled'|'enabling'|'disabling',
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
