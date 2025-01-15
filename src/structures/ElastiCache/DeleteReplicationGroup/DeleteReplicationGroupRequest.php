<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteReplicationGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationGroupId
 * @property bool|null $RetainPrimaryCluster
 * @property string|null $FinalSnapshotIdentifier
 */
class DeleteReplicationGroupRequest extends Request
{
    /**
     * @param array{
     *     ReplicationGroupId: string,
     *     RetainPrimaryCluster?: bool|null,
     *     FinalSnapshotIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
