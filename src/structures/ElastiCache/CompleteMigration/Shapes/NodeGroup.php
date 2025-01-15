<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CompleteMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NodeGroupId
 * @property string|null $Status
 * @property Endpoint|null $PrimaryEndpoint
 * @property Endpoint|null $ReaderEndpoint
 * @property string|null $Slots
 * @property list<NodeGroupMember>|null $NodeGroupMembers
 */
class NodeGroup extends Shape
{
    /**
     * @param array{
     *     NodeGroupId?: string|null,
     *     Status?: string|null,
     *     PrimaryEndpoint?: Endpoint|null,
     *     ReaderEndpoint?: Endpoint|null,
     *     Slots?: string|null,
     *     NodeGroupMembers?: list<NodeGroupMember>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
