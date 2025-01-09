<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeUpdateActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NodeGroupId
 * @property list<NodeGroupMemberUpdateStatus> $NodeGroupMemberUpdateStatus
 */
class NodeGroupUpdateStatus extends Shape
{
    /**
     * @param array{
     *     NodeGroupId?: string,
     *     NodeGroupMemberUpdateStatus?: list<NodeGroupMemberUpdateStatus>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
