<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\CreateScopeSnapshot;

trait CreateScopeSnapshotTrait
{
    /**
     * @param CreateScopeSnapshotRequest $args
     * @return CreateScopeSnapshotResponse
     */
    public function createScopeSnapshot(CreateScopeSnapshotRequest $args)
    {
        $result = parent::createScopeSnapshot($args->toArray());
        return new CreateScopeSnapshotResponse($result->toArray());
    }
}
