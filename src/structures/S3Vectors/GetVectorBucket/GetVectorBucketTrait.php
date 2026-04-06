<?php

namespace Sunaoka\Aws\Structures\S3Vectors\GetVectorBucket;

trait GetVectorBucketTrait
{
    /**
     * @param GetVectorBucketRequest $args
     * @return GetVectorBucketResponse
     */
    public function getVectorBucket(GetVectorBucketRequest $args)
    {
        $result = parent::getVectorBucket($args->toArray());
        return new GetVectorBucketResponse($result->toArray());
    }
}
