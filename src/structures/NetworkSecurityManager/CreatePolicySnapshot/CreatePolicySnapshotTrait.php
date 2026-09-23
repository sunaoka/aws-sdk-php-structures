<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\CreatePolicySnapshot;

trait CreatePolicySnapshotTrait
{
    /**
     * @param CreatePolicySnapshotRequest $args
     * @return CreatePolicySnapshotResponse
     */
    public function createPolicySnapshot(CreatePolicySnapshotRequest $args)
    {
        $result = parent::createPolicySnapshot($args->toArray());
        return new CreatePolicySnapshotResponse($result->toArray());
    }
}
