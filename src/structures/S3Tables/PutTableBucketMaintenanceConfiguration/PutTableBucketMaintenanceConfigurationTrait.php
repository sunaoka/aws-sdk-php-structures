<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTableBucketMaintenanceConfiguration;

trait PutTableBucketMaintenanceConfigurationTrait
{
    /**
     * @param PutTableBucketMaintenanceConfigurationRequest $args
     * @return void
     */
    public function putTableBucketMaintenanceConfiguration(PutTableBucketMaintenanceConfigurationRequest $args)
    {
        parent::putTableBucketMaintenanceConfiguration($args->toArray());
    }
}
