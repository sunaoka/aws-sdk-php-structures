<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketLifecycleConfiguration;

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
