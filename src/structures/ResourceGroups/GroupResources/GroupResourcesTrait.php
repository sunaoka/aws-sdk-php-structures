<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\GroupResources;

trait GroupResourcesTrait
{
    /**
     * @param GroupResourcesRequest $args
     * @return GroupResourcesResponse
     */
    public function groupResources(GroupResourcesRequest $args)
    {
        $result = parent::groupResources($args->toArray());
        return new GroupResourcesResponse($result->toArray());
    }
}
