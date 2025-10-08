<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetResources;

trait GetResourcesTrait
{
    /**
     * @param GetResourcesRequest $args
     * @return GetResourcesResponse
     */
    public function getResources(GetResourcesRequest $args)
    {
        $result = parent::getResources($args->toArray());
        return new GetResourcesResponse($result->toArray());
    }
}
