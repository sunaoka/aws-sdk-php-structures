<?php

namespace Sunaoka\Aws\Structures\Proton\GetServiceSyncConfig;

trait GetServiceSyncConfigTrait
{
    /**
     * @param GetServiceSyncConfigRequest $args
     * @return GetServiceSyncConfigResponse
     */
    public function getServiceSyncConfig(GetServiceSyncConfigRequest $args)
    {
        $result = parent::getServiceSyncConfig($args->toArray());
        return new GetServiceSyncConfigResponse($result->toArray());
    }
}
