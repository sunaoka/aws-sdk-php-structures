<?php

namespace Sunaoka\Aws\Structures\S3\HeadBucket;

trait HeadBucketTrait
{
    /**
     * @param HeadBucketRequest $args
     * @return void
     */
    public function headBucket(HeadBucketRequest $args)
    {
        parent::headBucket($args->toArray());
    }
}
