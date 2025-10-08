<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetStorageConfiguration;

trait GetStorageConfigurationTrait
{
    /**
     * @param GetStorageConfigurationRequest $args
     * @return GetStorageConfigurationResponse
     */
    public function getStorageConfiguration(GetStorageConfigurationRequest $args)
    {
        $result = parent::getStorageConfiguration($args->toArray());
        return new GetStorageConfigurationResponse($result->toArray());
    }
}
