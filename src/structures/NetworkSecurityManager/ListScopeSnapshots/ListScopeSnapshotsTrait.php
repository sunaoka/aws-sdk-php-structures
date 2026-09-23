<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListScopeSnapshots;

trait ListScopeSnapshotsTrait
{
    /**
     * @param ListScopeSnapshotsRequest $args
     * @return ListScopeSnapshotsResponse
     */
    public function listScopeSnapshots(ListScopeSnapshotsRequest $args)
    {
        $result = parent::listScopeSnapshots($args->toArray());
        return new ListScopeSnapshotsResponse($result->toArray());
    }
}
