<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DisassociateGlobalReplicationGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReplicationGroupId
 * @property string|null $ReplicationGroupRegion
 * @property string|null $Role
 * @property 'enabled'|'disabled'|'enabling'|'disabling'|null $AutomaticFailover
 * @property string|null $Status
 */
class GlobalReplicationGroupMember extends Shape
{
    /**
     * @param array{
     *     ReplicationGroupId?: string|null,
     *     ReplicationGroupRegion?: string|null,
     *     Role?: string|null,
     *     AutomaticFailover?: 'enabled'|'disabled'|'enabling'|'disabling'|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
