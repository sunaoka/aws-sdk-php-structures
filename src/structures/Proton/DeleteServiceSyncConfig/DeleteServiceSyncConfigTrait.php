<?php

namespace Sunaoka\Aws\Structures\Proton\DeleteServiceSyncConfig;

trait DeleteServiceSyncConfigTrait
{
    /**
     * @param DeleteServiceSyncConfigRequest $args
     * @return DeleteServiceSyncConfigResponse
     */
    public function deleteServiceSyncConfig(DeleteServiceSyncConfigRequest $args)
    {
        $result = parent::deleteServiceSyncConfig($args->toArray());
        return new DeleteServiceSyncConfigResponse($result->toArray());
    }
}
