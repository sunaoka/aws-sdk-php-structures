<?php

namespace Sunaoka\Aws\Structures\Iot\UpdatePackageConfiguration;

trait UpdatePackageConfigurationTrait
{
    /**
     * @param UpdatePackageConfigurationRequest $args
     * @return UpdatePackageConfigurationResponse
     */
    public function updatePackageConfiguration(UpdatePackageConfigurationRequest $args)
    {
        $result = parent::updatePackageConfiguration($args->toArray());
        return new UpdatePackageConfigurationResponse($result->toArray());
    }
}
