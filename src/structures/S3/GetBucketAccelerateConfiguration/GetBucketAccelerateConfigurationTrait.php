<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketAccelerateConfiguration;

trait GetBucketAccelerateConfigurationTrait
{
    /**
     * @param GetBucketAccelerateConfigurationRequest $args
     * @return GetBucketAccelerateConfigurationResponse
     */
    public function getBucketAccelerateConfiguration(GetBucketAccelerateConfigurationRequest $args)
    {
        $result = parent::getBucketAccelerateConfiguration($args->toArray());
        return new GetBucketAccelerateConfigurationResponse($result->toArray());
    }
}
