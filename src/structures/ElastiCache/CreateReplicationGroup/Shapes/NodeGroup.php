<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateReplicationGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NodeGroupId
 * @property string $Status
 * @property Endpoint $PrimaryEndpoint
 * @property Endpoint $ReaderEndpoint
 * @property string $Slots
 * @property list<NodeGroupMember> $NodeGroupMembers
 */
class NodeGroup extends Shape
{
    /**
     * @param array{
     *     NodeGroupId?: string,
     *     Status?: string,
     *     PrimaryEndpoint?: Endpoint,
     *     ReaderEndpoint?: Endpoint,
     *     Slots?: string,
     *     NodeGroupMembers?: list<NodeGroupMember>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
