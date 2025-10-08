<?php

namespace Sunaoka\Aws\Structures\Lightsail\SetResourceAccessForBucket;

trait SetResourceAccessForBucketTrait
{
    /**
     * @param SetResourceAccessForBucketRequest $args
     * @return SetResourceAccessForBucketResponse
     */
    public function setResourceAccessForBucket(SetResourceAccessForBucketRequest $args)
    {
        $result = parent::setResourceAccessForBucket($args->toArray());
        return new SetResourceAccessForBucketResponse($result->toArray());
    }
}
