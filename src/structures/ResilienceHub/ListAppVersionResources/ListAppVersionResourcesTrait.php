<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppVersionResources;

trait ListAppVersionResourcesTrait
{
    /**
     * @param ListAppVersionResourcesRequest $args
     * @return ListAppVersionResourcesResponse
     */
    public function listAppVersionResources(ListAppVersionResourcesRequest $args)
    {
        $result = parent::listAppVersionResources($args->toArray());
        return new ListAppVersionResourcesResponse($result->toArray());
    }
}
