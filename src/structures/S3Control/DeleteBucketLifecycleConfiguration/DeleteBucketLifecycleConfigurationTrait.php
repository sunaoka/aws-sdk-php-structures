<?php

namespace Sunaoka\Aws\Structures\S3Control\DeleteBucketLifecycleConfiguration;

trait DeleteBucketLifecycleConfigurationTrait
{
    /**
     * @param DeleteBucketLifecycleConfigurationRequest $args
     * @return void
     */
    public function deleteBucketLifecycleConfiguration(DeleteBucketLifecycleConfigurationRequest $args)
    {
        parent::deleteBucketLifecycleConfiguration($args->toArray());
    }
}
