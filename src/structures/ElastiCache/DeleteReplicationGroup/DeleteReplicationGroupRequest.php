<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteReplicationGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationGroupId
 * @property bool $RetainPrimaryCluster
 * @property string $FinalSnapshotIdentifier
 */
class DeleteReplicationGroupRequest extends Request
{
    /**
     * @param array{
     *     ReplicationGroupId: string,
     *     RetainPrimaryCluster?: bool,
     *     FinalSnapshotIdentifier?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
