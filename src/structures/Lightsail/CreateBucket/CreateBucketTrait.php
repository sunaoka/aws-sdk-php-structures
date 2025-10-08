<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateBucket;

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
