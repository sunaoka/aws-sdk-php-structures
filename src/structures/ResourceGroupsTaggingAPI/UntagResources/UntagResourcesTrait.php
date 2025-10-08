<?php

namespace Sunaoka\Aws\Structures\ResourceGroupsTaggingAPI\UntagResources;

trait UntagResourcesTrait
{
    /**
     * @param UntagResourcesRequest $args
     * @return UntagResourcesResponse
     */
    public function untagResources(UntagResourcesRequest $args)
    {
        $result = parent::untagResources($args->toArray());
        return new UntagResourcesResponse($result->toArray());
    }
}
