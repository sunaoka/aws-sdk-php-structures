<?php

namespace Sunaoka\Aws\Structures\APIPortal\DeleteDiscoveryConfiguration;

trait DeleteDiscoveryConfigurationTrait
{
    /**
     * @param DeleteDiscoveryConfigurationRequest $args
     * @return void
     */
    public function deleteDiscoveryConfiguration(DeleteDiscoveryConfigurationRequest $args)
    {
        parent::deleteDiscoveryConfiguration($args->toArray());
    }
}
