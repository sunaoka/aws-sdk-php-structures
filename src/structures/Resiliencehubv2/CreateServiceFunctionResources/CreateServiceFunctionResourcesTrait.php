<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreateServiceFunctionResources;

trait CreateServiceFunctionResourcesTrait
{
    /**
     * @param CreateServiceFunctionResourcesRequest $args
     * @return CreateServiceFunctionResourcesResponse
     */
    public function createServiceFunctionResources(CreateServiceFunctionResourcesRequest $args)
    {
        $result = parent::createServiceFunctionResources($args->toArray());
        return new CreateServiceFunctionResourcesResponse($result->toArray());
    }
}
