<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListDeploymentSnapshots;

trait ListDeploymentSnapshotsTrait
{
    /**
     * @param ListDeploymentSnapshotsRequest $args
     * @return ListDeploymentSnapshotsResponse
     */
    public function listDeploymentSnapshots(ListDeploymentSnapshotsRequest $args)
    {
        $result = parent::listDeploymentSnapshots($args->toArray());
        return new ListDeploymentSnapshotsResponse($result->toArray());
    }
}
