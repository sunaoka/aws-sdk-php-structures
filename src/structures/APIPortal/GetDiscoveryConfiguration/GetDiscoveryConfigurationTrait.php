<?php

namespace Sunaoka\Aws\Structures\APIPortal\GetDiscoveryConfiguration;

trait GetDiscoveryConfigurationTrait
{
    /**
     * @param GetDiscoveryConfigurationRequest $args
     * @return GetDiscoveryConfigurationResponse
     */
    public function getDiscoveryConfiguration(GetDiscoveryConfigurationRequest $args)
    {
        $result = parent::getDiscoveryConfiguration($args->toArray());
        return new GetDiscoveryConfigurationResponse($result->toArray());
    }
}
