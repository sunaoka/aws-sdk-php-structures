<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\ListClusterSnapshots;

trait ListClusterSnapshotsTrait
{
    /**
     * @param ListClusterSnapshotsRequest $args
     * @return ListClusterSnapshotsResponse
     */
    public function listClusterSnapshots(ListClusterSnapshotsRequest $args)
    {
        $result = parent::listClusterSnapshots($args->toArray());
        return new ListClusterSnapshotsResponse($result->toArray());
    }
}
