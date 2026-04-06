<?php

namespace Sunaoka\Aws\Structures\CodeConnections\UpdateSyncConfiguration;

trait UpdateSyncConfigurationTrait
{
    /**
     * @param UpdateSyncConfigurationRequest $args
     * @return UpdateSyncConfigurationResponse
     */
    public function updateSyncConfiguration(UpdateSyncConfigurationRequest $args)
    {
        $result = parent::updateSyncConfiguration($args->toArray());
        return new UpdateSyncConfigurationResponse($result->toArray());
    }
}
