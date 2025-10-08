<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\DeleteEventLogConfiguration;

trait DeleteEventLogConfigurationTrait
{
    /**
     * @param DeleteEventLogConfigurationRequest $args
     * @return void
     */
    public function deleteEventLogConfiguration(DeleteEventLogConfigurationRequest $args)
    {
        parent::deleteEventLogConfiguration($args->toArray());
    }
}
