<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\UpdateMediaStorageConfiguration;

trait UpdateMediaStorageConfigurationTrait
{
    /**
     * @param UpdateMediaStorageConfigurationRequest $args
     * @return UpdateMediaStorageConfigurationResponse
     */
    public function updateMediaStorageConfiguration(UpdateMediaStorageConfigurationRequest $args)
    {
        $result = parent::updateMediaStorageConfiguration($args->toArray());
        return new UpdateMediaStorageConfigurationResponse($result->toArray());
    }
}
