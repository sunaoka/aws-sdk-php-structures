<?php

namespace Sunaoka\Aws\Structures\S3Control\PutBucketLifecycleConfiguration;

trait PutBucketLifecycleConfigurationTrait
{
    /**
     * @param PutBucketLifecycleConfigurationRequest $args
     * @return void
     */
    public function putBucketLifecycleConfiguration(PutBucketLifecycleConfigurationRequest $args)
    {
        parent::putBucketLifecycleConfiguration($args->toArray());
    }
}
