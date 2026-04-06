<?php

namespace Sunaoka\Aws\Structures\Sms\DeleteAppReplicationConfiguration;

trait DeleteAppReplicationConfigurationTrait
{
    /**
     * @param DeleteAppReplicationConfigurationRequest $args
     * @return DeleteAppReplicationConfigurationResponse
     */
    public function deleteAppReplicationConfiguration(DeleteAppReplicationConfigurationRequest $args)
    {
        $result = parent::deleteAppReplicationConfiguration($args->toArray());
        return new DeleteAppReplicationConfigurationResponse($result->toArray());
    }
}
