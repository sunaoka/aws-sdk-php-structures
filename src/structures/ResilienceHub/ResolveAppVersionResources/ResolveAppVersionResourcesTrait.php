<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ResolveAppVersionResources;

trait ResolveAppVersionResourcesTrait
{
    /**
     * @param ResolveAppVersionResourcesRequest $args
     * @return ResolveAppVersionResourcesResponse
     */
    public function resolveAppVersionResources(ResolveAppVersionResourcesRequest $args)
    {
        $result = parent::resolveAppVersionResources($args->toArray());
        return new ResolveAppVersionResourcesResponse($result->toArray());
    }
}
