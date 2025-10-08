<?php

namespace Sunaoka\Aws\Structures\CodeConnections\GetSyncConfiguration;

trait GetSyncConfigurationTrait
{
    /**
     * @param GetSyncConfigurationRequest $args
     * @return GetSyncConfigurationResponse
     */
    public function getSyncConfiguration(GetSyncConfigurationRequest $args)
    {
        $result = parent::getSyncConfiguration($args->toArray());
        return new GetSyncConfigurationResponse($result->toArray());
    }
}
