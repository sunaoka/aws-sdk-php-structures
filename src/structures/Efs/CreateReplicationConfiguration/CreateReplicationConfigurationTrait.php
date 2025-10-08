<?php

namespace Sunaoka\Aws\Structures\Efs\CreateReplicationConfiguration;

trait CreateReplicationConfigurationTrait
{
    /**
     * @param CreateReplicationConfigurationRequest $args
     * @return CreateReplicationConfigurationResponse
     */
    public function createReplicationConfiguration(CreateReplicationConfigurationRequest $args)
    {
        $result = parent::createReplicationConfiguration($args->toArray());
        return new CreateReplicationConfigurationResponse($result->toArray());
    }
}
