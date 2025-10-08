<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackResources;

trait ListStackResourcesTrait
{
    /**
     * @param ListStackResourcesRequest $args
     * @return ListStackResourcesResponse
     */
    public function listStackResources(ListStackResourcesRequest $args)
    {
        $result = parent::listStackResources($args->toArray());
        return new ListStackResourcesResponse($result->toArray());
    }
}
