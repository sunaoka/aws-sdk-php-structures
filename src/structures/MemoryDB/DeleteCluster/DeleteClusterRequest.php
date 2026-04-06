<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DeleteCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property string|null $MultiRegionClusterName
 * @property string|null $FinalSnapshotName
 */
class DeleteClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     MultiRegionClusterName?: string|null,
     *     FinalSnapshotName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
