<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\DeleteOtaTaskConfiguration;

trait DeleteOtaTaskConfigurationTrait
{
    /**
     * @param DeleteOtaTaskConfigurationRequest $args
     * @return void
     */
    public function deleteOtaTaskConfiguration(DeleteOtaTaskConfigurationRequest $args)
    {
        parent::deleteOtaTaskConfiguration($args->toArray());
    }
}
