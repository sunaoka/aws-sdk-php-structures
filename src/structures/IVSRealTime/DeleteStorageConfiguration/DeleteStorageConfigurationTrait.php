<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\DeleteStorageConfiguration;

trait DeleteStorageConfigurationTrait
{
    /**
     * @param DeleteStorageConfigurationRequest $args
     * @return DeleteStorageConfigurationResponse
     */
    public function deleteStorageConfiguration(DeleteStorageConfigurationRequest $args)
    {
        $result = parent::deleteStorageConfiguration($args->toArray());
        return new DeleteStorageConfigurationResponse($result->toArray());
    }
}
