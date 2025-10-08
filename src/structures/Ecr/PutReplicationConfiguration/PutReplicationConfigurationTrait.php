<?php

namespace Sunaoka\Aws\Structures\Ecr\PutReplicationConfiguration;

trait PutReplicationConfigurationTrait
{
    /**
     * @param PutReplicationConfigurationRequest $args
     * @return PutReplicationConfigurationResponse
     */
    public function putReplicationConfiguration(PutReplicationConfigurationRequest $args)
    {
        $result = parent::putReplicationConfiguration($args->toArray());
        return new PutReplicationConfigurationResponse($result->toArray());
    }
}
