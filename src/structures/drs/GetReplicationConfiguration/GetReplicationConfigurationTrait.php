<?php

namespace Sunaoka\Aws\Structures\drs\GetReplicationConfiguration;

trait GetReplicationConfigurationTrait
{
    /**
     * @param GetReplicationConfigurationRequest $args
     * @return GetReplicationConfigurationResponse
     */
    public function getReplicationConfiguration(GetReplicationConfigurationRequest $args)
    {
        $result = parent::getReplicationConfiguration($args->toArray());
        return new GetReplicationConfigurationResponse($result->toArray());
    }
}
