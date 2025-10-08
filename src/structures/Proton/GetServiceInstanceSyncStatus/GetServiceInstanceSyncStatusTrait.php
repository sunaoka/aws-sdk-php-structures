<?php

namespace Sunaoka\Aws\Structures\Proton\GetServiceInstanceSyncStatus;

trait GetServiceInstanceSyncStatusTrait
{
    /**
     * @param GetServiceInstanceSyncStatusRequest $args
     * @return GetServiceInstanceSyncStatusResponse
     */
    public function getServiceInstanceSyncStatus(GetServiceInstanceSyncStatusRequest $args)
    {
        $result = parent::getServiceInstanceSyncStatus($args->toArray());
        return new GetServiceInstanceSyncStatusResponse($result->toArray());
    }
}
