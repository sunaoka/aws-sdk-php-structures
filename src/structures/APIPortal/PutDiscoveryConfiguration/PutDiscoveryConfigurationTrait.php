<?php

namespace Sunaoka\Aws\Structures\APIPortal\PutDiscoveryConfiguration;

trait PutDiscoveryConfigurationTrait
{
    /**
     * @param PutDiscoveryConfigurationRequest $args
     * @return PutDiscoveryConfigurationResponse
     */
    public function putDiscoveryConfiguration(PutDiscoveryConfigurationRequest $args)
    {
        $result = parent::putDiscoveryConfiguration($args->toArray());
        return new PutDiscoveryConfigurationResponse($result->toArray());
    }
}
