<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CompleteMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GlobalReplicationGroupId
 * @property string $GlobalReplicationGroupMemberRole
 */
class GlobalReplicationGroupInfo extends Shape
{
    /**
     * @param array{
     *     GlobalReplicationGroupId?: string,
     *     GlobalReplicationGroupMemberRole?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
