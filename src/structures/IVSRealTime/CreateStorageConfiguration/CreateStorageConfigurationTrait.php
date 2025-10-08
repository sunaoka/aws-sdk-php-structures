<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\CreateStorageConfiguration;

trait CreateStorageConfigurationTrait
{
    /**
     * @param CreateStorageConfigurationRequest $args
     * @return CreateStorageConfigurationResponse
     */
    public function createStorageConfiguration(CreateStorageConfigurationRequest $args)
    {
        $result = parent::createStorageConfiguration($args->toArray());
        return new CreateStorageConfigurationResponse($result->toArray());
    }
}
