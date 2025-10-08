<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetBundles;

trait GetBundlesTrait
{
    /**
     * @param GetBundlesRequest $args
     * @return GetBundlesResponse
     */
    public function getBundles(GetBundlesRequest $args)
    {
        $result = parent::getBundles($args->toArray());
        return new GetBundlesResponse($result->toArray());
    }
}
