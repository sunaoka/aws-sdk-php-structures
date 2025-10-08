<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateBucket;

trait UpdateBucketTrait
{
    /**
     * @param UpdateBucketRequest $args
     * @return UpdateBucketResponse
     */
    public function updateBucket(UpdateBucketRequest $args)
    {
        $result = parent::updateBucket($args->toArray());
        return new UpdateBucketResponse($result->toArray());
    }
}
