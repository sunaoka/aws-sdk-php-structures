<?php

namespace Sunaoka\Aws\Structures\CodeStar\ListResources;

trait ListResourcesTrait
{
    /**
     * @param ListResourcesRequest $args
     * @return ListResourcesResponse
     */
    public function listResources(ListResourcesRequest $args)
    {
        $result = parent::listResources($args->toArray());
        return new ListResourcesResponse($result->toArray());
    }
}
