<?php

namespace Sunaoka\Aws\Structures\S3Control\GetBucketLifecycleConfiguration;

trait GetBucketLifecycleConfigurationTrait
{
    /**
     * @param GetBucketLifecycleConfigurationRequest $args
     * @return GetBucketLifecycleConfigurationResponse
     */
    public function getBucketLifecycleConfiguration(GetBucketLifecycleConfigurationRequest $args)
    {
        $result = parent::getBucketLifecycleConfiguration($args->toArray());
        return new GetBucketLifecycleConfigurationResponse($result->toArray());
    }
}
