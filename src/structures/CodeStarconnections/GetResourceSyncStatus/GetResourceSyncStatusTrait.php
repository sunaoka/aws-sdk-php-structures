<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\GetResourceSyncStatus;

trait GetResourceSyncStatusTrait
{
    /**
     * @param GetResourceSyncStatusRequest $args
     * @return GetResourceSyncStatusResponse
     */
    public function getResourceSyncStatus(GetResourceSyncStatusRequest $args)
    {
        $result = parent::getResourceSyncStatus($args->toArray());
        return new GetResourceSyncStatusResponse($result->toArray());
    }
}
