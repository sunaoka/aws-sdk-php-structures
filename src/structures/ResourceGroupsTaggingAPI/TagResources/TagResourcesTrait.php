<?php

namespace Sunaoka\Aws\Structures\ResourceGroupsTaggingAPI\TagResources;

trait TagResourcesTrait
{
    /**
     * @param TagResourcesRequest $args
     * @return TagResourcesResponse
     */
    public function tagResources(TagResourcesRequest $args)
    {
        $result = parent::tagResources($args->toArray());
        return new TagResourcesResponse($result->toArray());
    }
}
