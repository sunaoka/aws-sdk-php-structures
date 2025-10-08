<?php

namespace Sunaoka\Aws\Structures\WorkMail\DeleteEmailMonitoringConfiguration;

trait DeleteEmailMonitoringConfigurationTrait
{
    /**
     * @param DeleteEmailMonitoringConfigurationRequest $args
     * @return DeleteEmailMonitoringConfigurationResponse
     */
    public function deleteEmailMonitoringConfiguration(DeleteEmailMonitoringConfigurationRequest $args)
    {
        $result = parent::deleteEmailMonitoringConfiguration($args->toArray());
        return new DeleteEmailMonitoringConfigurationResponse($result->toArray());
    }
}
