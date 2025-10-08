<?php

namespace Sunaoka\Aws\Structures\Route53\ListTagsForResources;

trait ListTagsForResourcesTrait
{
    /**
     * @param ListTagsForResourcesRequest $args
     * @return ListTagsForResourcesResponse
     */
    public function listTagsForResources(ListTagsForResourcesRequest $args)
    {
        $result = parent::listTagsForResources($args->toArray());
        return new ListTagsForResourcesResponse($result->toArray());
    }
}
