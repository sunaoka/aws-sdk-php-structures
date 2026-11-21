<?php

namespace Sunaoka\Aws\Structures\APIPortal\GetOrganizationDiscoveryConfiguration;

trait GetOrganizationDiscoveryConfigurationTrait
{
    /**
     * @param GetOrganizationDiscoveryConfigurationRequest $args
     * @return GetOrganizationDiscoveryConfigurationResponse
     */
    public function getOrganizationDiscoveryConfiguration(GetOrganizationDiscoveryConfigurationRequest $args)
    {
        $result = parent::getOrganizationDiscoveryConfiguration($args->toArray());
        return new GetOrganizationDiscoveryConfigurationResponse($result->toArray());
    }
}
