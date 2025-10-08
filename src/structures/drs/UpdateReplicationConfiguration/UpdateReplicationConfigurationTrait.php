<?php

namespace Sunaoka\Aws\Structures\drs\UpdateReplicationConfiguration;

trait UpdateReplicationConfigurationTrait
{
    /**
     * @param UpdateReplicationConfigurationRequest $args
     * @return UpdateReplicationConfigurationResponse
     */
    public function updateReplicationConfiguration(UpdateReplicationConfigurationRequest $args)
    {
        $result = parent::updateReplicationConfiguration($args->toArray());
        return new UpdateReplicationConfigurationResponse($result->toArray());
    }
}
