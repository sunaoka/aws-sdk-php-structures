<?php

namespace Sunaoka\Aws\Structures\Proton\CreateServiceSyncConfig;

trait CreateServiceSyncConfigTrait
{
    /**
     * @param CreateServiceSyncConfigRequest $args
     * @return CreateServiceSyncConfigResponse
     */
    public function createServiceSyncConfig(CreateServiceSyncConfigRequest $args)
    {
        $result = parent::createServiceSyncConfig($args->toArray());
        return new CreateServiceSyncConfigResponse($result->toArray());
    }
}
