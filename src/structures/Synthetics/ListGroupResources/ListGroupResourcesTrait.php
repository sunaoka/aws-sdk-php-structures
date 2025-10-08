<?php

namespace Sunaoka\Aws\Structures\Synthetics\ListGroupResources;

trait ListGroupResourcesTrait
{
    /**
     * @param ListGroupResourcesRequest $args
     * @return ListGroupResourcesResponse
     */
    public function listGroupResources(ListGroupResourcesRequest $args)
    {
        $result = parent::listGroupResources($args->toArray());
        return new ListGroupResourcesResponse($result->toArray());
    }
}
