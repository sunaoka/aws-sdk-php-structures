<?php

namespace Sunaoka\Aws\Structures\drs\GetFailbackReplicationConfiguration;

trait GetFailbackReplicationConfigurationTrait
{
    /**
     * @param GetFailbackReplicationConfigurationRequest $args
     * @return GetFailbackReplicationConfigurationResponse
     */
    public function getFailbackReplicationConfiguration(GetFailbackReplicationConfigurationRequest $args)
    {
        $result = parent::getFailbackReplicationConfiguration($args->toArray());
        return new GetFailbackReplicationConfigurationResponse($result->toArray());
    }
}
