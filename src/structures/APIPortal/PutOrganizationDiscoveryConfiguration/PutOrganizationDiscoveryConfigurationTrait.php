<?php

namespace Sunaoka\Aws\Structures\APIPortal\PutOrganizationDiscoveryConfiguration;

trait PutOrganizationDiscoveryConfigurationTrait
{
    /**
     * @param PutOrganizationDiscoveryConfigurationRequest $args
     * @return PutOrganizationDiscoveryConfigurationResponse
     */
    public function putOrganizationDiscoveryConfiguration(PutOrganizationDiscoveryConfigurationRequest $args)
    {
        $result = parent::putOrganizationDiscoveryConfiguration($args->toArray());
        return new PutOrganizationDiscoveryConfigurationResponse($result->toArray());
    }
}
