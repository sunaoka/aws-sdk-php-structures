<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateDistributionBundle;

trait UpdateDistributionBundleTrait
{
    /**
     * @param UpdateDistributionBundleRequest $args
     * @return UpdateDistributionBundleResponse
     */
    public function updateDistributionBundle(UpdateDistributionBundleRequest $args)
    {
        $result = parent::updateDistributionBundle($args->toArray());
        return new UpdateDistributionBundleResponse($result->toArray());
    }
}
