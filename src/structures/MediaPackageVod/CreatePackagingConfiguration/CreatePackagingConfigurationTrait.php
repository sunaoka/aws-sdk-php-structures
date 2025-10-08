<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\CreatePackagingConfiguration;

trait CreatePackagingConfigurationTrait
{
    /**
     * @param CreatePackagingConfigurationRequest $args
     * @return CreatePackagingConfigurationResponse
     */
    public function createPackagingConfiguration(CreatePackagingConfigurationRequest $args)
    {
        $result = parent::createPackagingConfiguration($args->toArray());
        return new CreatePackagingConfigurationResponse($result->toArray());
    }
}
