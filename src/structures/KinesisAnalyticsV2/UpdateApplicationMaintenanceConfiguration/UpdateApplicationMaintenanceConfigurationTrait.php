<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplicationMaintenanceConfiguration;

trait UpdateApplicationMaintenanceConfigurationTrait
{
    /**
     * @param UpdateApplicationMaintenanceConfigurationRequest $args
     * @return UpdateApplicationMaintenanceConfigurationResponse
     */
    public function updateApplicationMaintenanceConfiguration(UpdateApplicationMaintenanceConfigurationRequest $args)
    {
        $result = parent::updateApplicationMaintenanceConfiguration($args->toArray());
        return new UpdateApplicationMaintenanceConfigurationResponse($result->toArray());
    }
}
