<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListUnsupportedAppVersionResources;

trait ListUnsupportedAppVersionResourcesTrait
{
    /**
     * @param ListUnsupportedAppVersionResourcesRequest $args
     * @return ListUnsupportedAppVersionResourcesResponse
     */
    public function listUnsupportedAppVersionResources(ListUnsupportedAppVersionResourcesRequest $args)
    {
        $result = parent::listUnsupportedAppVersionResources($args->toArray());
        return new ListUnsupportedAppVersionResourcesResponse($result->toArray());
    }
}
