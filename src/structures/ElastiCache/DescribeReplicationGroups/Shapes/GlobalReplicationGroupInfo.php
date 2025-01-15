<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeReplicationGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GlobalReplicationGroupId
 * @property string|null $GlobalReplicationGroupMemberRole
 */
class GlobalReplicationGroupInfo extends Shape
{
    /**
     * @param array{
     *     GlobalReplicationGroupId?: string|null,
     *     GlobalReplicationGroupMemberRole?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
