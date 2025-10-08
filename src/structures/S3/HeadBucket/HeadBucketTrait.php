<?php

namespace Sunaoka\Aws\Structures\S3\HeadBucket;

trait HeadBucketTrait
{
    /**
     * @param HeadBucketRequest $args
     * @return HeadBucketResponse
     */
    public function headBucket(HeadBucketRequest $args)
    {
        $result = parent::headBucket($args->toArray());
        return new HeadBucketResponse($result->toArray());
    }
}
