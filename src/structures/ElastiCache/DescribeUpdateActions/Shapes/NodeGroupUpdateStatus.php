<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeUpdateActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NodeGroupId
 * @property list<NodeGroupMemberUpdateStatus>|null $NodeGroupMemberUpdateStatus
 */
class NodeGroupUpdateStatus extends Shape
{
    /**
     * @param array{
     *     NodeGroupId?: string|null,
     *     NodeGroupMemberUpdateStatus?: list<NodeGroupMemberUpdateStatus>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
