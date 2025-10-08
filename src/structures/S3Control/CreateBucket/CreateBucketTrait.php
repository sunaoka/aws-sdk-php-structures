<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateBucket;

trait CreateBucketTrait
{
    /**
     * @param CreateBucketRequest $args
     * @return CreateBucketResponse
     */
    public function createBucket(CreateBucketRequest $args)
    {
        $result = parent::createBucket($args->toArray());
        return new CreateBucketResponse($result->toArray());
    }
}
