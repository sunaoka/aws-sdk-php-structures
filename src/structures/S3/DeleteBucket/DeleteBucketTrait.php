<?php

namespace Sunaoka\Aws\Structures\S3\DeleteBucket;

trait DeleteBucketTrait
{
    /**
     * @param DeleteBucketRequest $args
     * @return void
     */
    public function deleteBucket(DeleteBucketRequest $args)
    {
        parent::deleteBucket($args->toArray());
    }
}
