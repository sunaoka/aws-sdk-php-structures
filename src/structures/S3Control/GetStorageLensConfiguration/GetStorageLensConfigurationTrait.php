<?php

namespace Sunaoka\Aws\Structures\S3Control\GetStorageLensConfiguration;

trait GetStorageLensConfigurationTrait
{
    /**
     * @param GetStorageLensConfigurationRequest $args
     * @return GetStorageLensConfigurationResponse
     */
    public function getStorageLensConfiguration(GetStorageLensConfigurationRequest $args)
    {
        $result = parent::getStorageLensConfiguration($args->toArray());
        return new GetStorageLensConfigurationResponse($result->toArray());
    }
}
