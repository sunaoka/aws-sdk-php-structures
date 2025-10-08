<?php

namespace Sunaoka\Aws\Structures\AppFabric\ListAppBundles;

trait ListAppBundlesTrait
{
    /**
     * @param ListAppBundlesRequest $args
     * @return ListAppBundlesResponse
     */
    public function listAppBundles(ListAppBundlesRequest $args)
    {
        $result = parent::listAppBundles($args->toArray());
        return new ListAppBundlesResponse($result->toArray());
    }
}
