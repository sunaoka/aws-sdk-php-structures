<?php

namespace Sunaoka\Aws\Structures\AppFabric\GetAppBundle;

trait GetAppBundleTrait
{
    /**
     * @param GetAppBundleRequest $args
     * @return GetAppBundleResponse
     */
    public function getAppBundle(GetAppBundleRequest $args)
    {
        $result = parent::getAppBundle($args->toArray());
        return new GetAppBundleResponse($result->toArray());
    }
}
