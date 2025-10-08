<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketLifecycle;

trait PutBucketLifecycleTrait
{
    /**
     * @param PutBucketLifecycleRequest $args
     * @return void
     */
    public function putBucketLifecycle(PutBucketLifecycleRequest $args)
    {
        parent::putBucketLifecycle($args->toArray());
    }
}
