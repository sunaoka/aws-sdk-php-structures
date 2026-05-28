<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\DeleteServiceFunctionResources;

trait DeleteServiceFunctionResourcesTrait
{
    /**
     * @param DeleteServiceFunctionResourcesRequest $args
     * @return DeleteServiceFunctionResourcesResponse
     */
    public function deleteServiceFunctionResources(DeleteServiceFunctionResourcesRequest $args)
    {
        $result = parent::deleteServiceFunctionResources($args->toArray());
        return new DeleteServiceFunctionResourcesResponse($result->toArray());
    }
}
