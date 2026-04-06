<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\UpdateEventLogConfiguration;

trait UpdateEventLogConfigurationTrait
{
    /**
     * @param UpdateEventLogConfigurationRequest $args
     * @return void
     */
    public function updateEventLogConfiguration(UpdateEventLogConfigurationRequest $args)
    {
        parent::updateEventLogConfiguration($args->toArray());
    }
}
