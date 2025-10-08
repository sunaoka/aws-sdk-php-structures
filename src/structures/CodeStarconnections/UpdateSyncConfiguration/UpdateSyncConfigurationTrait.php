<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\UpdateSyncConfiguration;

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
