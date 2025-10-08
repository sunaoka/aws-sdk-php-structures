<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateBucketBundle;

trait UpdateBucketBundleTrait
{
    /**
     * @param UpdateBucketBundleRequest $args
     * @return UpdateBucketBundleResponse
     */
    public function updateBucketBundle(UpdateBucketBundleRequest $args)
    {
        $result = parent::updateBucketBundle($args->toArray());
        return new UpdateBucketBundleResponse($result->toArray());
    }
}
