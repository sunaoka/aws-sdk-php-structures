<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\CreateSyncConfiguration;

trait CreateSyncConfigurationTrait
{
    /**
     * @param CreateSyncConfigurationRequest $args
     * @return CreateSyncConfigurationResponse
     */
    public function createSyncConfiguration(CreateSyncConfigurationRequest $args)
    {
        $result = parent::createSyncConfiguration($args->toArray());
        return new CreateSyncConfigurationResponse($result->toArray());
    }
}
