<?php

namespace Sunaoka\Aws\Structures\AppFabric\CreateAppBundle;

trait CreateAppBundleTrait
{
    /**
     * @param CreateAppBundleRequest $args
     * @return CreateAppBundleResponse
     */
    public function createAppBundle(CreateAppBundleRequest $args)
    {
        $result = parent::createAppBundle($args->toArray());
        return new CreateAppBundleResponse($result->toArray());
    }
}
