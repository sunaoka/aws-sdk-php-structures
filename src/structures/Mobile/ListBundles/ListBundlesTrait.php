<?php

namespace Sunaoka\Aws\Structures\Mobile\ListBundles;

trait ListBundlesTrait
{
    /**
     * @param ListBundlesRequest $args
     * @return ListBundlesResponse
     */
    public function listBundles(ListBundlesRequest $args)
    {
        $result = parent::listBundles($args->toArray());
        return new ListBundlesResponse($result->toArray());
    }
}
