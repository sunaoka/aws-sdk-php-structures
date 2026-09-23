<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\CreateDeploymentSnapshot;

trait CreateDeploymentSnapshotTrait
{
    /**
     * @param CreateDeploymentSnapshotRequest $args
     * @return CreateDeploymentSnapshotResponse
     */
    public function createDeploymentSnapshot(CreateDeploymentSnapshotRequest $args)
    {
        $result = parent::createDeploymentSnapshot($args->toArray());
        return new CreateDeploymentSnapshotResponse($result->toArray());
    }
}
