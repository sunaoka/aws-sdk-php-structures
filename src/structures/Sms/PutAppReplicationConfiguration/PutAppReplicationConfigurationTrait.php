<?php

namespace Sunaoka\Aws\Structures\Sms\PutAppReplicationConfiguration;

trait PutAppReplicationConfigurationTrait
{
    /**
     * @param PutAppReplicationConfigurationRequest $args
     * @return PutAppReplicationConfigurationResponse
     */
    public function putAppReplicationConfiguration(PutAppReplicationConfigurationRequest $args)
    {
        $result = parent::putAppReplicationConfiguration($args->toArray());
        return new PutAppReplicationConfigurationResponse($result->toArray());
    }
}
