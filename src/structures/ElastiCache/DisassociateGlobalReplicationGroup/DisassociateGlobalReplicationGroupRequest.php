<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DisassociateGlobalReplicationGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalReplicationGroupId
 * @property string $ReplicationGroupId
 * @property string $ReplicationGroupRegion
 */
class DisassociateGlobalReplicationGroupRequest extends Request
{
    /**
     * @param array{
     *     GlobalReplicationGroupId: string,
     *     ReplicationGroupId: string,
     *     ReplicationGroupRegion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
