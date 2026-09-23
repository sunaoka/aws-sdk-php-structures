<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListPolicySnapshots;

trait ListPolicySnapshotsTrait
{
    /**
     * @param ListPolicySnapshotsRequest $args
     * @return ListPolicySnapshotsResponse
     */
    public function listPolicySnapshots(ListPolicySnapshotsRequest $args)
    {
        $result = parent::listPolicySnapshots($args->toArray());
        return new ListPolicySnapshotsResponse($result->toArray());
    }
}
