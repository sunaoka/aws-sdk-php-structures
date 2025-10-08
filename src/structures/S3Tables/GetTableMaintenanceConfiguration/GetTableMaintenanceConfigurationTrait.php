<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableMaintenanceConfiguration;

trait GetTableMaintenanceConfigurationTrait
{
    /**
     * @param GetTableMaintenanceConfigurationRequest $args
     * @return GetTableMaintenanceConfigurationResponse
     */
    public function getTableMaintenanceConfiguration(GetTableMaintenanceConfigurationRequest $args)
    {
        $result = parent::getTableMaintenanceConfiguration($args->toArray());
        return new GetTableMaintenanceConfigurationResponse($result->toArray());
    }
}
