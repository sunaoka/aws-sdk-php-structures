<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DeleteCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property string|null $FinalSnapshotName
 */
class DeleteClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     FinalSnapshotName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
