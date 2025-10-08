<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetBucketBundles;

trait GetBucketBundlesTrait
{
    /**
     * @param GetBucketBundlesRequest $args
     * @return GetBucketBundlesResponse
     */
    public function getBucketBundles(GetBucketBundlesRequest $args)
    {
        $result = parent::getBucketBundles($args->toArray());
        return new GetBucketBundlesResponse($result->toArray());
    }
}
