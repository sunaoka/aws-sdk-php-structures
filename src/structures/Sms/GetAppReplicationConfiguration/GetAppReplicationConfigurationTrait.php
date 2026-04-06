<?php

namespace Sunaoka\Aws\Structures\Sms\GetAppReplicationConfiguration;

trait GetAppReplicationConfigurationTrait
{
    /**
     * @param GetAppReplicationConfigurationRequest $args
     * @return GetAppReplicationConfigurationResponse
     */
    public function getAppReplicationConfiguration(GetAppReplicationConfigurationRequest $args)
    {
        $result = parent::getAppReplicationConfiguration($args->toArray());
        return new GetAppReplicationConfigurationResponse($result->toArray());
    }
}
