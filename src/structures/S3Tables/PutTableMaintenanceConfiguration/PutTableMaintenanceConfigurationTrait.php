<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTableMaintenanceConfiguration;

trait PutTableMaintenanceConfigurationTrait
{
    /**
     * @param PutTableMaintenanceConfigurationRequest $args
     * @return void
     */
    public function putTableMaintenanceConfiguration(PutTableMaintenanceConfigurationRequest $args)
    {
        parent::putTableMaintenanceConfiguration($args->toArray());
    }
}
