<?php

namespace Sunaoka\Aws\Structures\APIPortal\DeleteOrganizationDiscoveryConfiguration;

trait DeleteOrganizationDiscoveryConfigurationTrait
{
    /**
     * @param DeleteOrganizationDiscoveryConfigurationRequest $args
     * @return void
     */
    public function deleteOrganizationDiscoveryConfiguration(DeleteOrganizationDiscoveryConfigurationRequest $args)
    {
        parent::deleteOrganizationDiscoveryConfiguration($args->toArray());
    }
}
