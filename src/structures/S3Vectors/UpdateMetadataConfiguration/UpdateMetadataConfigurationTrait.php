<?php

namespace Sunaoka\Aws\Structures\S3Vectors\UpdateMetadataConfiguration;

trait UpdateMetadataConfigurationTrait
{
    /**
     * @param UpdateMetadataConfigurationRequest $args
     * @return UpdateMetadataConfigurationResponse
     */
    public function updateMetadataConfiguration(UpdateMetadataConfigurationRequest $args)
    {
        $result = parent::updateMetadataConfiguration($args->toArray());
        return new UpdateMetadataConfigurationResponse($result->toArray());
    }
}
