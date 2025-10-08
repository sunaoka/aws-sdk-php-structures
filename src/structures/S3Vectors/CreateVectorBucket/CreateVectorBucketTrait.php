<?php

namespace Sunaoka\Aws\Structures\S3Vectors\CreateVectorBucket;

trait CreateVectorBucketTrait
{
    /**
     * @param CreateVectorBucketRequest $args
     * @return CreateVectorBucketResponse
     */
    public function createVectorBucket(CreateVectorBucketRequest $args)
    {
        $result = parent::createVectorBucket($args->toArray());
        return new CreateVectorBucketResponse($result->toArray());
    }
}
