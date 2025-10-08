<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\PutStorageConfiguration;

trait PutStorageConfigurationTrait
{
    /**
     * @param PutStorageConfigurationRequest $args
     * @return PutStorageConfigurationResponse
     */
    public function putStorageConfiguration(PutStorageConfigurationRequest $args)
    {
        $result = parent::putStorageConfiguration($args->toArray());
        return new PutStorageConfigurationResponse($result->toArray());
    }
}
