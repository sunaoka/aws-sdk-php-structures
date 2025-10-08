<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketLifecycleConfiguration;

trait PutBucketLifecycleConfigurationTrait
{
    /**
     * @param PutBucketLifecycleConfigurationRequest $args
     * @return PutBucketLifecycleConfigurationResponse
     */
    public function putBucketLifecycleConfiguration(PutBucketLifecycleConfigurationRequest $args)
    {
        $result = parent::putBucketLifecycleConfiguration($args->toArray());
        return new PutBucketLifecycleConfigurationResponse($result->toArray());
    }
}
