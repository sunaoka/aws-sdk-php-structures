<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateServiceSyncConfig;

trait UpdateServiceSyncConfigTrait
{
    /**
     * @param UpdateServiceSyncConfigRequest $args
     * @return UpdateServiceSyncConfigResponse
     */
    public function updateServiceSyncConfig(UpdateServiceSyncConfigRequest $args)
    {
        $result = parent::updateServiceSyncConfig($args->toArray());
        return new UpdateServiceSyncConfigResponse($result->toArray());
    }
}
