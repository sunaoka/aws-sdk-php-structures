<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\UpdateStreamStorageConfiguration;

trait UpdateStreamStorageConfigurationTrait
{
    /**
     * @param UpdateStreamStorageConfigurationRequest $args
     * @return UpdateStreamStorageConfigurationResponse
     */
    public function updateStreamStorageConfiguration(UpdateStreamStorageConfigurationRequest $args)
    {
        $result = parent::updateStreamStorageConfiguration($args->toArray());
        return new UpdateStreamStorageConfigurationResponse($result->toArray());
    }
}
