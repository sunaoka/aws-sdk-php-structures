<?php

namespace Sunaoka\Aws\Structures\S3\DeleteBucketLifecycle;

trait DeleteBucketLifecycleTrait
{
    /**
     * @param DeleteBucketLifecycleRequest $args
     * @return void
     */
    public function deleteBucketLifecycle(DeleteBucketLifecycleRequest $args)
    {
        parent::deleteBucketLifecycle($args->toArray());
    }
}
