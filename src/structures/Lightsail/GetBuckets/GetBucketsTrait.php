<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetBuckets;

trait GetBucketsTrait
{
    /**
     * @param GetBucketsRequest $args
     * @return GetBucketsResponse
     */
    public function getBuckets(GetBucketsRequest $args)
    {
        $result = parent::getBuckets($args->toArray());
        return new GetBucketsResponse($result->toArray());
    }
}
