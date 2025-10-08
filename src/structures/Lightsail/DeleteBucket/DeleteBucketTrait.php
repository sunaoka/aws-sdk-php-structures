<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteBucket;

trait DeleteBucketTrait
{
    /**
     * @param DeleteBucketRequest $args
     * @return DeleteBucketResponse
     */
    public function deleteBucket(DeleteBucketRequest $args)
    {
        $result = parent::deleteBucket($args->toArray());
        return new DeleteBucketResponse($result->toArray());
    }
}
