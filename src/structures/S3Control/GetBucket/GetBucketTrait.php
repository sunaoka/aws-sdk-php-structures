<?php

namespace Sunaoka\Aws\Structures\S3Control\GetBucket;

trait GetBucketTrait
{
    /**
     * @param GetBucketRequest $args
     * @return GetBucketResponse
     */
    public function getBucket(GetBucketRequest $args)
    {
        $result = parent::getBucket($args->toArray());
        return new GetBucketResponse($result->toArray());
    }
}
