<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\SearchResources;

trait SearchResourcesTrait
{
    /**
     * @param SearchResourcesRequest $args
     * @return SearchResourcesResponse
     */
    public function searchResources(SearchResourcesRequest $args)
    {
        $result = parent::searchResources($args->toArray());
        return new SearchResourcesResponse($result->toArray());
    }
}
