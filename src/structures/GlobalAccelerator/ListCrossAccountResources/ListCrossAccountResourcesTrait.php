<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListCrossAccountResources;

trait ListCrossAccountResourcesTrait
{
    /**
     * @param ListCrossAccountResourcesRequest $args
     * @return ListCrossAccountResourcesResponse
     */
    public function listCrossAccountResources(ListCrossAccountResourcesRequest $args)
    {
        $result = parent::listCrossAccountResources($args->toArray());
        return new ListCrossAccountResourcesResponse($result->toArray());
    }
}
