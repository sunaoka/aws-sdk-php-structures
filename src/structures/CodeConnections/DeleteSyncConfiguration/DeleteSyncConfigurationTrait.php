<?php

namespace Sunaoka\Aws\Structures\CodeConnections\DeleteSyncConfiguration;

trait DeleteSyncConfigurationTrait
{
    /**
     * @param DeleteSyncConfigurationRequest $args
     * @return DeleteSyncConfigurationResponse
     */
    public function deleteSyncConfiguration(DeleteSyncConfigurationRequest $args)
    {
        $result = parent::deleteSyncConfiguration($args->toArray());
        return new DeleteSyncConfigurationResponse($result->toArray());
    }
}
