<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableBucketMaintenanceConfiguration;

trait GetTableBucketMaintenanceConfigurationTrait
{
    /**
     * @param GetTableBucketMaintenanceConfigurationRequest $args
     * @return GetTableBucketMaintenanceConfigurationResponse
     */
    public function getTableBucketMaintenanceConfiguration(GetTableBucketMaintenanceConfigurationRequest $args)
    {
        $result = parent::getTableBucketMaintenanceConfiguration($args->toArray());
        return new GetTableBucketMaintenanceConfigurationResponse($result->toArray());
    }
}
