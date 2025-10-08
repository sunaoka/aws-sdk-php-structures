<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\GetSyncConfiguration;

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
