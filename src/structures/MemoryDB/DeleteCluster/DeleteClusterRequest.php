<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DeleteCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property string $MultiRegionClusterName
 * @property string $FinalSnapshotName
 */
class DeleteClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     MultiRegionClusterName?: string,
     *     FinalSnapshotName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
