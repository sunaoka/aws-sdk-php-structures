<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDistributionBundles;

trait GetDistributionBundlesTrait
{
    /**
     * @param GetDistributionBundlesRequest $args
     * @return GetDistributionBundlesResponse
     */
    public function getDistributionBundles(GetDistributionBundlesRequest $args)
    {
        $result = parent::getDistributionBundles($args->toArray());
        return new GetDistributionBundlesResponse($result->toArray());
    }
}
